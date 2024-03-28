<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website Using Php and MySQL</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS file-->
    <link rel="stylesheet" href="style.css">
    <Style>
      
    </Style>
  </head>
<body>
    <!-- navbar -->
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="position: fixed;height: 50px; z-index:1;top:0;left:0;width:100%" >
  <div class="container-fluid p-0">
     
     <img src="images/logo.png" alt="" style="height: 40px; width: auto;">
     
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#navbarSupportedContent">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Ecommerce%20website/admin_area/About%20Us.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Ecommerce%20website/admin_area/contact%20Us.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Ecommerce%20website/admin_area/Register.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart<i class="fa fa-shopping-cart"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Ecommerce%20website/admin_area/Customer%20Services.php">Stores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Ecommerce%20website/admin_area/">Seller Center</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>

 <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
</ul>
</nav>
<!-- third child -->
<div class= "bg-light">
  <h3 class="text-center">Afuma Hidden Store </h3>
  <p class="text-center"> Communication is at the heart of e-commerce and the community</p>
</div>
<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- products -->
    <div class ="row">
    <div class="col-md-4 mb-2">
    <div class="card">
    <img src="images/Laptop.png" cass="card-img-top"alt="">
  <div class="card-body">
    <h5 class="card-title">hp Laptop</h5>
    <p class="card-text">KSH 30,000.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
    </div>
   <div class="col-md-4 mb-2">
   <div class="card">
  <img src="images/airpods.png"class="card-img-top" alt=""> 
  <div class="card-body">
    <h5 class="card-title">Pro airpods</h5>
    <p class="card-text">KSH 515.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
   </div>
</div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="images/phones.png"class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Oppo A53</h5>
    <p class="card-text">KSH 24,000.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
    </div>
</div>

    <div class="col-md-4 mb-2">
    <div class="card">
  <img src="images/USB.png" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Type C charger</h5>
    <p class="card-text">KSH 200.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
    </div>
</div>
<div class="col-md-4 mb-2">
    <div class="card">
    <img src="images/Laptop.png"class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Lenovo Laptop</h5>
    <p class="card-text">KSH 34,000.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
    </div>
</div>
<div class="col-md-4 mb-2">
    <div class="card">
    <img src="images/tv.webp"class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">55' Screen</h5>
    <p class="card-text">KSH 42,000.</p>
    <a href="#" class="btn btn-info">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
</div>
    </div>
</div>
<div class="col-md-2 bg-secondary p-0">
  <ul class="navbar-nav me-auto text-center"
  <! -- sidenav-->
  <li class="nav-item">
    <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Brand 1</a>
</li>
<li class= "nav-item">
    <a href="#" class="nav-link text-light">Brand 2</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Brand 3</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Brand 4</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Brand 5</a>
</li>
</div>
</div>
<div class="col-md-2 bg-secondary p-0">
  <!-- brands to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <!-- Categories  to be displayed-->
    <li class="nav-item">
    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Category 1</a>
</li>
<li class= "nav-item">
    <a href="#" class="nav-link text-light">Category 2</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Category3</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Category 4</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link text-light">Category 5</a>
</li>
</div>
</div>


<!-- last child -->
<div class= "bg-info p-3 text-center">
  <p> All rights reserved  Designed by Wawire-2024</p>
</div>
    </div

  < !-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>