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


Plugin::setInfos(array(
    'id'          => 'notes',
    'title'       => __('Notes'),
    'description' => __('Have your notes always by your side.'),
    'version'     => '0.0.1',
    'license'     => 'GPL',
    'author'      => 'Dejan Andjelkovic',
    'website'     => 'http://www.project79.net/',
    'update_url'  => 'http://www.project79.net/plugin-versions.xml',
    'require_wolf_version' => '0.6.0',
    'type' => 'both'
));

// Show tab
Plugin::addController('notes', __('Notes'), 'administrator', true);

// Load Notes model
AutoLoader::addFile('Notes', CORE_ROOT.'/plugins/notes/models/Notes.php');

// Setup routes
Dispatcher::addRoute(array(
    '/notes/shownote/:num'  =>  '/plugin/notes/shownote/$1',
    '/notes/update/:num'    =>  '/plugin/notes/update/$1'
));