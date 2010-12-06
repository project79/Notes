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
 
 // Connect
 $PDO = Record::getConnection();

 // Create table
 
 $PDO->exec("CREATE TABLE ".TABLE_PREFIX."notes (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        content TEXT,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8");

// Insert example note
$PDO->exec("INSERT INTO ".TABLE_PREFIX."notes (id, title, content, created_on, updated_on) VALUES (1, 'My first Note', 'I have succesfully installed this amazing plugin.<br /> I am so proud of myself!', NOW(), NOW() )");

