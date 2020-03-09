<?php

include 'includes/header.php';
include 'Classes/Database.php';
include 'Classes/Listing.php';
include 'Classes/Category.php';


 $listing = new Listing;


 ?>

<style type ="text/css">
.jpets{
  background-size:contain;
  width:100%;
  color:#fff;
  background:linear-gradient(
        rgba(24, 22, 22, 0.45), 
        rgba(26, 24, 24, 0.45)
      ),  url('img/college1.jpeg');
}
</style>

<main role="main">

<div class="container-fluid">
 <div class="jumbotron jpets text-center">
      <h1>All Listings</h1>
</div>
  </div>


  <div class = "wrapper container-fluid">
  <h3 class="text-center">All New Listings</h3>

  <div class="row">
  <!--Categories and form half-->
    <div class="col-md-2">
      <div class="borderBox">
         <h3>Categories:</h3>
         <div class="list-group">
            <a href="pages/electronics.php" class="list-group-item list-group-item-action">Electronics </a>
            <a href="pages/clothes.php" class="list-group-item list-group-item-action">Clothes</a>
            <a href="pages/furniture.php" class="list-group-item list-group-item-action">Furniture</a>
            <a href="pages/automotive.php" class="list-group-item list-group-item-action">Automotive</a>
            <a href="pages/books.php" class="list-group-item list-group-item-action">Books</a>
            <a href="pages/jewelry.php" class="list-group-item list-group-item-action">Jewelry</a>
            <a href="pages/appliances.php" class="list-group-item list-group-item-action">Appliances</a>
            <a href="pages/pets.php" class="list-group-item list-group-item-action">Pets</a>
         </div>
        
      </div>
    </div>

   <!--Top Categories list-->
    <div class="col-10">
    

   
    <div class="row">
    

        <?php 

        $listing->displayAllListings();

        ?>
   



     <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="img/laptop.jpeg" width="100%" height="225">
        <div class="card-body">
          <bold>Title Item</bold>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
 </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    

<div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="img/shoes.jpg" width="100%" height="225">
        <div class="card-body">
            <bold>Title Item</bold>
             <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
        </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="img/bag.jpeg" width="100%" height="225">
        <div class="card-body">
            <bold>Title Item</bold>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
         </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>

   
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="img/shoes2.jpeg" width="100%" height="225">
        <div class="card-body">
          <bold>Title Item</bold>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    

<div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="img/controller.jpeg" width="100%" height="225">
        <div class="card-body">
            <bold>Title Item</bold>
             <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
           </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="img/headphones.jpeg" width="100%" height="225">
        <div class="card-body">
            <bold>Title Item</bold>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
           </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  </div>
  </div>

  
  </div>
  </div>












</main>

<?php include 'includes/footer.php' ?>