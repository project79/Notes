<?php

/**
* Notes plugin for Wolf CMS <http://project79.net/projects/notes>
* Available on Github <https://github.com/project79>
*
* Simple notes for admin area.
*
* @author Dejan Andjelkovic <dejan79@gmail.com>
* @package Wolf
* @subpackage plugin.notes
* @version 0.0.9
* @licence http://www.gnu.org/licenses/gpl.html
* @copyright http://project79.net, 2010-2012
*/


if (!defined('IN_CMS')) { exit(); }



class NotesController extends PluginController {

    private static function _checkPermission() {
        AuthUser::load();
        if ( ! AuthUser::isLoggedIn()) {
            redirect(get_url('login'));
        }
    }

    public function __construct() {
        self::_checkPermission();
        
        define('NOTES_VIEWS_BASE', 'notes/views');

        $this->setLayout('backend');
        $this->assignToLayout('sidebar', new View('../../plugins/notes/views/sidebar'));
    }

    // Take me to all notes
    public function index() {
        $this->tasks();
    }

    // Documentation
    public function documentation() {
        $this->display(NOTES_VIEWS_BASE.'/documentation');
    }

    // Add new note
    public function createnewnote(){
        $this->display(NOTES_VIEWS_BASE.'/newnote');
    }
    
    // List all notes
    public function tasks() {
        $notes = Notes::findAllFrom('Notes','id=id ORDER BY id DESC');
        $this->display(NOTES_VIEWS_BASE.'/tasks', array('notes' => $notes));
    }
    
    public function update($id){
        $notes = Notes::findByIdFrom('Notes', $id);
        $this->display(NOTES_VIEWS_BASE.'/update', array('notes' => $notes));
    }

    public function shownote($id){
        $notes = Notes::findByIdFrom('Notes', $id);
        $this->display(NOTES_VIEWS_BASE.'/shownote', array('notes' => $notes));
    }

    // Delete note
    public function delete($id) {
        $notes = Notes::findByIdFrom('Notes', $id);
        $notes->delete();
        Flash::set('success', __('Your note was successfully deleted'));

        redirect(get_url('plugin/notes/tasks'));
    }

/*
* Create new note
*/

    public function newnote(){
        //

            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not save this note!'));
            }
            else {
                $data = $_POST['notes'];
                
				
                $notes = new Notes();
                
                $notes->title = $data['title'];
                $notes->filter_id = $data['filter_id'];
                $notes->content = $data['content'];
                $notes->created_on = date('Y-m-d');
                
                $notes->save();

                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/notes/tasks'));
        }
        
    }

/*
* Update note
*/
    public function updatenote(){

            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not update this note!'));
            }
            else {
                $data = $_POST['notes'];
                use_helper('Kses');
                $data['id'] = kses(trim($data['id']), array());

                $notes = new Notes();

                $notes->id = $data['id'];
                $notes->title = $data['title'];
                $notes->filter_id = $data['filter_id'];
                $notes->content = $data['content'];
                $notes->updated_on = date('Y-m-d');
                
                $notes->save();

                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/notes/tasks'));
        }

    }
}