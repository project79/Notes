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

 
class Notes extends Record {
    const TABLE_NAME = 'notes';

    public $id;
    public $filter_id;
    public $title;
    public $content;
    public $content_html;
    public $created_on;
    public $updated_on;


    public function getId() {
        return $this->id;
    }
	
    public function getFilter() {
	return $this->filter_id;
    }

    public function getTitle(){
	return $this->title;
    }
	
    public function getContent(){
	return $this->content;
    }
    
    public function frontendContent(){
        return $this->content_html;
    }


    public function showContent(){
        if(($this->filter_id) != 0) {
            return $this->content;
        }
        else {
            return $this->content_html;
        }
    }

    public function getDate(){
        return $this->created_on;
    }

    public function getUpdate(){
        return $this->updated_on;
    }
    
    public function beforeSave() {
    // stolen from snippet :)    
    if ( ! empty($this->filter_id)) {
        $this->content_html = Filter::get($this->filter_id)->apply($this->content);
    }
    else {
        $this->content_html = $this->content;
    }
    return true;
    }
  
}
