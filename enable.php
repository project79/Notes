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
* @version 0.0.8
* @licence http://www.gnu.org/licenses/gpl.html
* @copyright http://project79.net, 2010-2012
*/
if (!defined('IN_CMS')) { exit(); }

// Connect
$PDO    = Record::getConnection();
$driver = strtolower($PDO->getAttribute(Record::ATTR_DRIVER_NAME));

$sql_create = '';

//Create Tables
if ($driver == 'mysql')
{
    $sql_create = "CREATE TABLE ".TABLE_PREFIX."notes (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        filter_id VARCHAR(25),
        content TEXT,
        content_html TEXT,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8";

   }
elseif ($driver=='sqlite')
{
    $sql_create = "CREATE TABLE ".TABLE_PREFIX."notes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT,
        filter_id TEXT,
        content TEXT,
        content_html TEXT,
        created_on DATE,
        updated_on DATE
    )";

}

// Create table
$PDO->exec($sql_create);

