<?php
/*This class extends database class and has access to connect method. 
In this class I want to :
a. access methods in database class (so i can connect to database)
b. use those methods to perform queries on listings by inserting, and deleting post
*/
class Listing extends Database {
//set variables
public $userName;
public $email;
public $phone;
public $title;
public $catID;
public $descr;
public $photo;
public $id;
public $stmt;
public $loop;

//when inserting a listing trigger this method
public function insertListing(){
  //set form information into variables
  $userName = $_POST['userName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $title = $_POST['title'];
  $descr = $_POST['descr'];
  $catID = $_POST['catID'];  
  $photo= basename($_FILES['photo']['name']);
  $upload='/var/www/html/TigerTrade/uploads/' .$photo;

  $query="INSERT INTO Listings(userName, email, phone, title, descr, catID, photo)VALUES(?,?,?,?,?,?,?)";
  move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
   $stmt=$this->connect();
   $stmt2 = $stmt->prepare($query);
   $stmt2->bind_param("sssssis",$userName, $email, $phone, $title, $descr, $catID, $upload);
   if($stmt2->execute()){
   echo '<div class="alert alert-success" role="alert">
         Listing added!
          </div>';
  };
}

public function displayListing(){
  // loop through all information stored in database. Display it on add listing page
  $stmt = $this->connect();
  $query = "SELECT * FROM Listings";
  $loop = $stmt->query($query);
  while ($row = $loop->fetch_assoc())
    {
      echo "<li class='list-group-item d-flex justify-content-between lh-condensed' name='id'>";
      echo "<div>";
      echo "<h6 class='my-0'> <br>" . $row['title'] . "</h6>";
      echo "<small class='text-muted'> <br>". $row['descr'] . "</small>";
      echo "<br>";
      echo "<img src=". $row['photo'] . ">";
      echo "</div>";
      echo "</li>";
      echo "<button type='submit' class='btn btn-danger btn-sm' name='delete' value='". $row['id']."'>Delete</button>";
   }
}

// method to loop through all listings and display on  all listings page
public function displayAllListings(){
  $stmt = $this->connect();
  $query = "SELECT * FROM Listings";
  $loop = $stmt->query($query);

  while ($row = $loop->fetch_assoc())
    {     
  echo'  
       <div class="col-md-4">
         <div class="card mb-4 shadow-sm">
          <img src='. $row['photo'] . 'width="100%" height="225">
        <div class="card-body">
          <h5>'. $row['title'] . '</h5>
          <p>'. $row['descr'] . '</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
           </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>    
   ';
    }
}
 public function deleteListing(){
 // grab the post id value and delete listing based on id
  $id = $_POST['delete'];
  $query = "DELETE FROM Listings WHERE id=$id";
  $stmt = $this->connect();
  if($loop = $stmt->query($query)){
  echo '<div class="alert alert-danger" role="alert">
         Item Deleted!
       </div>';
  }
}
}
