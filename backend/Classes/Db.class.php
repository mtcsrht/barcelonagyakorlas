<?php
class Db{
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct($host, $user, $password, $database){
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }
    public function connect(){
        
        try{
            $conn = new mysqli($this->host,$this->user,$this->password,$this->database);
            $conn->set_charset("utf8");
        }
        catch (Exception $ex){
            echo($conn->error);
        }
        return $conn;
    }
}