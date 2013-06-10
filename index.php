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
 * @version 0.0.8
 * @licence http://www.gnu.org/licenses/gpl.html
 * @copyright http://project79.net, 2010-2012
 */

if (!defined('IN_CMS')) { exit(); }



Plugin::setInfos(array(
    'id'          => 'notes',
    'title'       => __('Notes'),
    'description' => __('Have your notes always by your side.'),
    'version'     => '0.1.0',
    'license'     => 'GPL',
    'author'      => 'Dejan Andjelkovic',
    'website'     => 'http://www.project79.net/projects/notes',
    'update_url'  => 'http://www.project79.net/plugin-versions.xml',
    'require_wolf_version' => '0.7.3'
));

// Show tab
Plugin::addController('notes', __('Notes'), 'admin_view', true);

// Load Notes model
AutoLoader::addFile('Notes', CORE_ROOT.'/plugins/notes/models/Notes.php');


// Show all notes in frontend
function showallnotes(){
    $notes = Notes::findAllFrom('Notes', 'id=id ORDER BY created_on DESC');
    echo '<div id="show-all-notes">';
        foreach ($notes as $n) {
            echo '<h3>'.$n->getTitle().'</h3>';
            echo $n->frontendContent();
        }
    echo '</div>';
}

// Show note by $id
function shownotebyid($id) {
    $note = Notes::findByIdFrom('Notes', $id);
    echo '<div id="show-note-by-id">';
    echo '<h3>'.$note->getTitle().'</h3>';
    echo $note->frontendContent();
    echo '</div>';
}
