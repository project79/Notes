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
 
class Notes extends Record {
    const TABLE_NAME = 'notes';

    public $id;

    public function getId() {
        return $this->id;
    }

    public function getTitle(){
	return $this->title;
    }
	
    public function getContent(){
	return $this->content;
    }

    public function getDate(){
        return $this->created_on;
    }

    public function getUpdate(){
        return $this->updated_on;
    }
}