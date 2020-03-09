<?php include 'includes/header.php';
      include 'Classes/Database.php';   
 ?>

 
    <div class="container-fluid bgBack">
       <h1 class="headerText text-center"> Buy, Sell, and Trade </h1> 
    </div>

  <div class="album py-5 bg-light">
    <div class="container text-center">
        <h3>Top Categories</h3>
        <div class="container boxDesign">
                <div class="row row-cols-4">
                  <a href="pages/electronics.php"> 
                   <div class="col-sm">
                   <i class="fas fa-tv"></i>
                   <br>
                     Electronics
                  </div>
                  </a>
                
                 <a href="pages/automotive.php">
                  <div class="col-sm">
                   <i class="fas fa-car"></i><br>
                      Automotive
                  </div>
                 </a>

                 <a href = "pages/appliances.php">
                  <div class="col-sm">
                  <i class="fas fa-blender"></i><br>
                      Appliances
                  </div>
                  </a>

                  <a href = "pages/clothes.php">
                  <div class="col-sm">
                    <i class="fas fa-tshirt"></i><br>            
                       Clothes
                   </div>
                  </a>

                </div>
              </div>
              <div class="container boxDesign">
                   
                    <a href = "pages/books.php">
                    <div class="row row-cols-4">
                       <div class="col-sm">
                        <i class="fas fa-book"></i><br>
                         Books
                      </div>
                    </a>

                     <a href ="pages/furniture.php">
                      <div class="col-sm">
                        <i class="fas fa-couch"></i><br>
                          Furniture
                      </div>
                      </a>

                      <a href = "pages/jewelry.php">
                      <div class="col-sm">
                         <i class="fas fa-gem"></i><br>
                          Jewelry
                      </div>
                      </a>

                      <a href = "pages/pets.php">
                      <div class="col-sm">
                       <i class="fas fa-dog"></i><br>
                           Pets
                      </div>
                      </a>

                    </div>
                  </div>
   
    </div>
  </div>


  <div class ="container">
     <div class = "row">
       <div class = "col-sm-6">
         <img src="img/college5.jpeg" class="imgDisplay">
       </div>
       <div class="col-sm-6 imgDisplay">
         <img src="img/college4.jpeg" class="imgDisplay">
       </div>
     </div>
     <div class = "row mt-4">
      <div class = "col-sm-6">
        <img src="img/college6.jpeg" class="imgDisplay">
      </div>
      <div class="col-sm-6 imgDisplay">
        <img src="img/college2.jpeg" class="imgDisplay">
      </div>
    </div>
  </div>
  </div>

 <!--- Bottom Past Pictures -->


  <div class = "wrapper container-fluid">
  <h3 class="text-center">Whats New</h3>

  <div class="row">
  <!--Categories and form half-->
    <div class="col-md-4">
      <div class="borderBox">
         <h3>Categories:</h3>
         <div class="list-group">
            <a href="pages/electronics.php" class="list-group-item list-group-item-action active">Electronics </a>
            <a href="pages/clothes.php" class="list-group-item list-group-item-action">Clothes</a>
            <a href="pages/furniture.php" class="list-group-item list-group-item-action">Furniture</a>
            <a href="pages/automotive.php" class="list-group-item list-group-item-action">Automotive</a>
            <a href="pages/books.php" class="list-group-item list-group-item-action">Books</a>
            <a href="pages/jewelry.php" class="list-group-item list-group-item-action">Jewelry</a>
            <a href="pages/appliances.php" class="list-group-item list-group-item-action">Appliances</a>
            <a href="pages/pets.php" class="list-group-item list-group-item-action">Pets</a>
         </div>
         <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h6 class="card-title center">Subscribe to events</h6>
          <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
         </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
      </div>
    </div>

   <!--Top Categories list-->
    <div class="col-8">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner active">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/laptop.jpeg" alt="First slide" height="450">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/shoes2.jpeg" alt="Second slide" height="450">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/book.jpeg" alt="Third slide" height="450">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <div class="row mt-4 mb-5">
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="img/laptop.jpeg" width="100%" height="225">
        <div class="card-body">
          <bold>Mac Book Air 13"</bold>
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
            <bold>Shoes for Sale</bold>
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
            <bold>New Handbag</bold>
            <div class="d-flex justify-content-between align-items-center">
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
 <?php include 'includes/footer.php' ?>