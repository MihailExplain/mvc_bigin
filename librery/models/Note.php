<?php


namespace models;

use mysqli;

class Note
{
    protected $_db;

    public function __construct()
    {
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if($this->_db->connect_error !=0){
            die($this->_db->connect_error);//TODO exception
        }
    }

    public function all(){
        $query = "SELECT * FROM notes;";
        $result = $this->_db->query($query);
        if(!$result){
            die($this->_db->error);//TODO exception
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function add($note){
        $query = "INSERT INTO notes values (null, '$note');";
        if(!$this->_db->query($query)){
            die($this->_db->error);//TODO exception
        }
    }
    public function noteDel($noteId){
        $sql = "DELETE FROM notes WHERE id = '$noteId';";
        if(!$this->_db->query($sql)){
            die($this->_db->error);//TODO exception
        }
    }
}