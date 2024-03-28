<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .footer{
            position: absolute;
            bottom: 0;
        }


        </style>
</head>
<body>
    <!-- navbar -->
    <!-- first child-->
    <div class="container-fluid p-0">
        <nav class="navbar nav-expand-lg navbar-light bg-info">
            <div class="container-fluid">
              
     <img src="../images/logo.png" alt="" style="height: 40px; width: auto;">
     <nav class="navbar nav-expand-lg">
        <ul class="navbar-nav">
            <li class ="nav-item">
                <a href="" class= "nav-link"> Welcome Guest</a>

     </nav>
</div>
</nav>
<!-- second child -->
<div class=" bg-light">
    <h3 class="text-center p-2"> Manage Details</h3>
</div>
<!-- third child -->
<div class"row">
    <div  class="col-md-12 bg-secondary p-1 d-flex align-items-center">
        <div class="p-3">
            <a href="#"> <img src="../images/woofer.webp" alt="" style="height:40px; width: auto;"></a>
            <p class="text-light text-center">Admin Name</p> 
    </div>
    <div class="button text-center">
        <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
        <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Proucts</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
        <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
    </div>
    </div>
    </div>
<!-- fourth child -->
<div class="container my-5">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brand.php');
    }
    ?>
    </div>




<!-- last child -->
<div class= "bg-info p-3 text-center footer">
  <p> All rights reserved  Designed by Wawire-2024</p>
</div>

    </div>


<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>