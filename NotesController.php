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
 * @version 0.0.1
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net ,2010
 */

/* Uncomment this for usage with Wolf 0.7.0 and/or above
 * Security measure - from Wolf 0.7.0 above
 * if (!defined('IN_CMS')) { exit(); }
 */


class NotesController extends PluginController {

    private static function _checkPermission() {
        AuthUser::load();
        if ( ! AuthUser::isLoggedIn()) {
            redirect(get_url('login'));
        }
    }

    public function __construct() {
        if (defined('CMS_BACKEND')) {
            define('NOTES_VIEWS_BASE', 'notes/views');
            $this->setLayout('backend');
        }
        else {
            define('NOTES_VIEWS_BASE', '../../plugins/notes/views');
            $page = $this->findByUri(Plugin::getSetting('frontpage', 'notes'));
            $layout_id = $this->getLayoutId($page);
            $layout = Layout::findById($layout_id);
            $this->setLayout($layout->name);

        }
        $this->assignToLayout('sidebar', new View('../../plugins/notes/views/sidebar'));

        }

    // prikazi sve stranice
    public function index() {
        $this->tasks();
    }

    // dokumentacija
    public function documentation() {
        $this->display('notes/views/documentation');
    }
	
    // novi zadatak
    public function createnewnote(){
        $this->display('notes/views/newnote'); // ovo bi trebalo samo iskocit il nesto slicno!!!
    }
    
    // list all notes
    public function tasks() {
        $tasks = Notes::findAllFrom('Notes');

        $this->display('notes/views/tasks', array('tasks' => $tasks));
    }

   /* public function update(){
        $notes = Notes::findAllFrom('Notes');
        $this->display('notes/views/update', array('notes' => $notes));
    } */
    
    // update
    public function update($id){
        $notes = Notes::findByIdFrom('Notes', $id);
        $this->display(NOTES_VIEWS_BASE.'/update', array('notes' => $notes));
    }

    public function shownote($id){
        $notes = Notes::findByIdFrom('Notes', $id);
        $this->display(NOTES_VIEWS_BASE.'/shownote', array('notes' => $notes));
    }
    /*
    public static function findByIdFrom($class_name, $id) {
        return self::findOneFrom($class_name, 'id=?', array($id));
    }
*/

    /*
     * Kreiraj novi unos
     * @todo add kses
     */
    public function newnote(){

            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not save this note!'));
            }
            else {
                $data = $_POST['notes'];
                use_helper('Kses');
                $data['id'] = kses(trim($data['id']), array()); //$data[djelatnosti_id] mora biti isti kao name u klasi gdje je definirano polje za unos (u fileu novi_unos_tvrtke.php)
                /*$data['djelatnosti_id'] = kses(trim($data['djelatnosti_id']), array());
                 */

                $notes = new Notes();

                $notes->id = $data['id'];
                $notes->title = $data['title'];
                $notes->content = $data['content'];
                $notes->created_on = date('Y-m-d'); // da vidimo hoce li raditi
                $notes->save();

                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/notes/tasks'));
        }
        
    }

    /*
     * Update note
     * @todo add kses
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
                $notes->content = $data['content'];
                $notes->updated_on = date('Y-m-d');
                $notes->save();

                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/notes/tasks'));
        }

    }


	
	
	
	
	
	

    function settings() {
        /** You can do this...
        $tmp = Plugin::getAllSettings('skeleton');
        $settings = array('my_setting1' => $tmp['setting1'],
                          'setting2' => $tmp['setting2'],
                          'a_setting3' => $tmp['setting3']
                         );
        $this->display('comment/views/settings', $settings);
         *
         * Or even this...
         */

        $this->display('notes/views/settings', Plugin::getAllSettings('notes'));
    }
}