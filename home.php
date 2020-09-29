<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }

 ?>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Home Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="style2.css">
   </head>
   <body>
     <nav>
       <a href="index.php">Log out</a>
     </nav>
    <div class="gallery">
          <div class="col-1-3">
            <div class="pic">
              <img src="cricket.png" alt="">
              <div class="user">
              <p>Cricket Bat</p>
              </div>
              <p class="year">500Rs</p>
              <p class="branch">English Willow,Season bat</p>
            </div>
            <div class="table">
              <a href="#"><button class="view">Purchase</button></a>
            </div>
          </div>
          <div class="col-1-3">
            <div class="pic">
              <img src="backpack.png" alt="">
              <div class="user">
              <p>Bag</p>
              </div>
              <p class="year">1000Rs</p>
              <p class="branch">Good quality,2 months warrenty</p>
            </div>
            <div class="table">
              <a href="#"><button class="view">Purchase</button></a>
            </div>
          </div>
          <div class="col-1-3">
            <div class="pic">
              <img src="mobile.png" alt="">
              <div class="user">
              <p>Mobile</p>
              </div>
              <p class="year">10,000Rs</p>
              <p class="branch">6GB RAM, 128 GB ROM</p>
            </div>
            <div class="table">
              <a href="#"><button class="view">Purchase</button></a>
            </div>
          </div>
        </div>
      </div>
   </body>
 </html>
