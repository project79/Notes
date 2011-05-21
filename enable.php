<?php

/**
* Notes plugin for Wolf CMS <http://project79.net/projects/notes>
* Available on Github <https://github.com/project79>
*
* Simple notes for admin area.
*
* @author Dejan Andjelkovic <dejan79@gmail.com>
* @author Daniel Alfonso, Brasil (for sqlite support)
* @package Wolf
* @subpackage plugin.notes
* @version 0.0.3
* @licence http://www.gnu.org/licenses/gpl.html
* @copyright http://project79.net ,2010-2011
*/
if (!defined('IN_CMS')) { exit(); }

// Connect
$PDO    = Record::getConnection();
$driver = strtolower($PDO->getAttribute(Record::ATTR_DRIVER_NAME));

$sql_create = '';
$sql_insert = '';

//Create Tables
if ($driver == 'mysql')
{
    $sql_create = "CREATE TABLE ".TABLE_PREFIX."notes (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        content TEXT,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8";

    $sql_insert = "INSERT INTO ".TABLE_PREFIX."notes (id, title, content, created_on, updated_on) VALUES (1, 'My first Note', '<p>You have succesfully installed Notes plugin. As you will see it\'s very easy to use.</p><p>Currently you can:</p><ul><li>Add New note</li><li>Edit and Delete note</li><li>View all Notes</li></ul><p>Hope you find it useful.</p>', NOW(), NOW() )";
}
elseif ($driver=='sqlite')
{
    $sql_create = "CREATE TABLE ".TABLE_PREFIX."notes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        content TEXT,
        created_on DATE,
        updated_on DATE
    )";

    $sql_insert = "INSERT INTO ".TABLE_PREFIX."notes (id, title, content, created_on, updated_on) VALUES (NULL, 'My first Note', '<p>You have succesfully installed Notes plugin. As you will see it is very easy to use.</p><p>Currently you can:</p><ul><li>Add New note</li><li>Edit and Delete note</li><li>View all Notes</li></ul><p>Hope you find it useful.</p>', '".date('Y-M-D')."', '".date('Y-M-D')."' )";
}
// echo '<p>'.$sql_insert.'</p>';
// Create table
$PDO->exec($sql_create);

// Insert example note
$PDO->exec($sql_insert);
