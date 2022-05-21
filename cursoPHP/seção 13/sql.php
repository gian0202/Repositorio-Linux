<?php 
class SQL extends PDO{
    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "159753"); 
    }
    public func
}