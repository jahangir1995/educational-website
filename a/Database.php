<?php


  class Database
  {
    private $hostdb="localhost";
    private $userdb="root";
    private $passdb="";
    private $namedb="admin";
    private $pdo;

    function __construct()
    {
      if (!isset($this->pdo)) {
      try {
        $link =new PDO("mysql:host=".$this->hostbd.";dbname=".$this->namedb,$this->userdb,$this->passdb);
        $link->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERROR_EXCEPTION);
        $link>exec("SET CHARACTER SET utf8");
        $link-> pdo=$link;

      } catch (PDOException $e) {
        die("failed".$e->getMessage());
      }

      }
    }
    //Read Data
    public function read(){

    }
    //Insert Data
    public function insert(){

    }
    //Update Data
    public function update(){

    }
    //Delete Data
    public function delete(){


  }
}

 ?>
