<?php
/*
 *
 *
 */

 
 
 // spoji se na bazu
 $PDO = Record::getConnection();

 // kreiraj tablicu
 // jeee sljaka!!!
 
 $PDO->exec("CREATE TABLE ".TABLE_PREFIX."notes (
        id INT(3) unsigned NOT NULL AUTO_INCREMENT,
        title VARCHAR(50),
        content TEXT,
        created_on DATE,
        updated_on DATE,
        PRIMARY KEY  (id)
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8");

// ubaci u tablicu
$PDO->exec("INSERT INTO ".TABLE_PREFIX."notes (id, title, content, created_on, updated_on) VALUES (1, 'My first Note', 'I have succesfully installed this amazing plugin.<br /> I am so proud of myself!', NOW(), NOW() )");

