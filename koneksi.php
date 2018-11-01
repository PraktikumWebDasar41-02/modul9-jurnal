<?php

class koneksi{
    protected $conn;
    public function __construct(){
	  $server   = "localhost";
      $username = "root";
      $pass     = "";
      $db       = "kuliah";
      $this->conn     = new mysqli($server, $username, $pass, $db);        
    }
}

?>
