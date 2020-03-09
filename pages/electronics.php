
<?php include 'header.php'?>

<style type ="text/css">
.jpets{
  background-size:contain;
  width:100%;
  color:#fff;
  background: url('../img/electronics.jpeg');
  height:50vh;
  background-position:30% 70%;
}

</style>
<main role="main">

<div class="container-fluid">
  <div class="jumbotron jpets text-center">
      <h1>Shop Electronics</h1>
</div>
  </div>

  <div class = "wrapper container-fluid">
  <h3 class="text-center">Whats New</h3>

  <div class="row">
  <!--Categories and form half-->
    <div class="col-md-3">
      <div class="borderBox">
         <h3>Categories:</h3>
         <div class="list-group">
            <a href="electronics.php" class="list-group-item list-group-item-action active">Electronics </a>
            <a href="clothes.php" class="list-group-item list-group-item-action ">Clothes</a>
            <a href="furniture.php" class="list-group-item list-group-item-action ">Furniture</a>
            <a href="automotive.php" class="list-group-item list-group-item-action ">Automotive</a>
            <a href="books.php" class="list-group-item list-group-item-action ">Books</a>
            <a href="jewelry.php" class="list-group-item list-group-item-action">Jewelry</a>
            <a href="appliances.php" class="list-group-item list-group-item-action">Appliances</a>
            <a href="pets.php" class="list-group-item list-group-item-action ">Pets</a>
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
    <div class="col-9">
     <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="../img/Electronics/book.jpeg" width="100%" height="225">
        <div class="card-body">
          <h5>Kindle For Sale</h5>
          <div class="d-flex justify-content-between align-items-center">
            <p>Good condition. Asking for $40 OBO. </p>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    

<div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="../img/Electronics/mac.jpeg" width="100%" height="225">
        <div class="card-body">
            <h5>Mac Pro for sale</h5>
             <div class="d-flex justify-content-between align-items-center">
            <p>Contact for more information. $1500 OBO</p>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="../img/Electronics/monitor.jpg" width="100%" height="225">
        <div class="card-body">
            <h5>Monitor</h5>
            <div class="d-flex justify-content-between align-items-center">
            <p>Contact for more details</p>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>

   
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
          <img src="../img/Electronics/controller.jpeg" width="100%" height="225">
        <div class="card-body">
          <h5>Xbox Controller</h5>
          <div class="d-flex justify-content-between align-items-center">
            <p>Contact for more info</p>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    

<div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="../img/Electronics/tv.jpg" width="100%" height="225">
        <div class="card-body">
            <h5>Samsung 60'</h5>
             <div class="d-flex justify-content-between align-items-center">
           <p>$200 OBO</p>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <img src="../img/Electronics/headphones.jpeg" width="100%" height="225">
        <div class="card-body">
            <h5>Headphones for Sale</h5>
            <div class="d-flex justify-content-between align-items-center">
           <p>Contact for more info</p>
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

<?php include 'footer.php' ?>