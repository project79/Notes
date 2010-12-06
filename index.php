<?php

 /*
 *
 *
 */
 
//if (!defined('IN_CMS')) { exit(); }

Plugin::setInfos(array(
    'id'          => 'notes',
    'title'       => __('Notes'),
    'description' => __('Have your notes always by your side.'),
    'version'     => '0.0.1',
    'license'     => 'GPL',
    'author'      => 'Dejan Andjelkovic',
    'website'     => 'http://www.project79.net/',
    //'update_url'  => 'http://www.project79.net/plugin-versions.xml',
    'require_wolf_version' => '0.6.0',
    'type' => 'both'
));

Plugin::addController('notes', __('Notes'), 'administrator', true);

// Load Notes model
AutoLoader::addFile('Notes', CORE_ROOT.'/plugins/notes/models/Notes.php');

// Setup routes to the forum.
Dispatcher::addRoute(array(
    '/notes/shownote/:num'                     => '/plugin/notes/shownote/$1' //u frontendu na stranici djelatnosti poziva funkciju popis_djelatnosti definiranu u kontroleru
    /*'/djelatnosti/:num'                => '/plugin/fond/view_tvrtke/$1',
    '/djelatnosti/tvrtke/:num'         => '/plugin/fond/view_detaljno/$1',
    '/fond/djelatnosti/:num'           => '/plugin/fond/tvrtke/$1',
    '/fond/djelatnosti/tvrtke/:num'    => '/plugin/fond/update/$1',
    '/fond/djelatnosti/tvrtka/:num'    => '/plugin/fond/detaljno/$1'*/
   ));