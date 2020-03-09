<?php  
include 'includes/header.php';
include 'Classes/Database.php';
include 'Classes/Listing.php';
include 'Classes/Category.php';
//create objects
$category =new Category;
$listing = new Listing;
//if user wants to add a listing,trigger this method
if(isset($_POST['add'])){
$listing->insertListing();
}
//if a user wants to delete a listing, trigger this method
if(isset($_POST['delete'])){
  $listing->deleteListing();
}
?>
<div class="jumbotron">
  <h1 class="display-4">Account Information</h1>
  <a href="mylisting.php"><i class="fas fa-user-circle"></i></a>
  <h4 class="lead">Name</h4>
  <hr class="my-4">
  <p>Program of Study</p>
  <p>Contact Information</p>
</div>

    <div class="container">
  <div class="text-center">
    <h2>Add Listing</h2>
  </div>
 <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
    <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your Listings:</span>
      </h4>
      <ul class="list-group mb-3" name='id'>
          <?php 
         //display all the listings user had entered on right hand side
          $listing->displayListing();

        ?>
 
      </ul>
      </form>
    </div>
    <div class="col-md-8 order-md-1">

       <!--Form for user to fill out-->    
      <form class="needs-validation" novalidate method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Name</label>
            <input type="text" class="form-control" id="userName" placeholder="" name = "userName" required>
        </div>
        </div>
  
         <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name = "email" placeholder="username@auburn.edu">
       </div>

       <div class="mb-3">
          <label for="phone">Phone number</label>
          <input type="tel" class="form-control" id="tel" name = "phone">
       </div>

        <div class="mb-3">
          <label for="listing">Listing Title</label>
          <input type="text" class="form-control" id="listingTitle" name = "title">
        </div>

        <div class="dropdown">
        <select class='form-control' name='catID'>;
              <option>Select category...</option>;
        
         <?php 
              //loop through categories in database for user to choose
              $loop = $category->catListings();
         
         ?>
         
       </div>

       <div class="form-group">
    <label for="exampleFormControlTextarea1">Description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name = "descr" rows="3"></textarea>
  </div>

  
  <div class="form-group">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name = "photo">
  </div>


     
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name = "add">Submit</button>
      </form>
    </div>
  </div>
</div>


   <?php  include 'includes/footer.php'; ?>
  