<?php

class Category extends Database {

public $catID;
public $name;
public $catList;
public $conn;
public $row;

// loop through category listing in database and display in form
public function catListings(){


    $conn = $this->connect();
    // Perform query
       
    $query = "SELECT * FROM Category";

    $catList = $conn->query($query);
    
    
    while ($row = $catList->fetch_assoc())
    {
        echo "<option value=' ". $row['catID']." '>" . $row['name'] . "</option> <br/>";

    }

     
    
    

     
}

}

?>