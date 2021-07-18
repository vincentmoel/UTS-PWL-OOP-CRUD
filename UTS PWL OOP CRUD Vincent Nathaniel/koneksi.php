<?php
class Koneksi{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'dbuts';

    public $conn;

    function __construct(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);

        if(!$this->conn){
            echo 'koneksi gagal';
        }
        return $this->conn;
    }
}

?>
