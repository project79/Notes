<?php

/*
 * Uf, ovdje bi trebao vrtit pizdarije iz baze
 */
 
class Notes extends Record {
    const TABLE_NAME = 'notes';

    /*
     * polja u tablici : id, title, content, created_on, updated_on
     * ako steka datum, onda treba definirat "public" varijablu
     */
    public $id;
    public $title;
    public $content;
    public $created_on;
    public $updated_on;

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

    public function getNoteUrl() {
        return BASE_URL.'notes/shownote/'.$this->id;
    }

    /*
    public function getDate($format=null){
        if ($format === null){
            return date('d.m.Y');
        }
        else {
            return $this->created_on;
        }
    }

    public function getUpdate($format=null){
        if ($format === null){
            return date('d.m.Y');
        }
        else {
            return $this->updated_on;
        }
    }
 *
 */
}