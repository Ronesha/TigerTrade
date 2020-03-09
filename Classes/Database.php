<?php 
//class is used just to connect to database. extend to other classes so they can use the connect method to connect to db to perform queries
class Database {

//set variables
public $host;
public $db_name;
public $username;
public $pass;
public $connection;

  public function connect(){
  
   //define variables in this method. Once this class is extended other classes can access this db connection method
    $this->host = "";
    $this->db_name = "";
    $this->username = "";
    $this->pass = '';
    
   //oop style of connecting to database 
    $connection = new mysqli($this->host, $this->username, $this->pass, $this->db_name);


    if($connection->connect_error){
        die("Error, could not connect to database". $connection->connect_error);
    }
    
   
    return $connection;
  
  }
  };