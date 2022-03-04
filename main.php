<?php
session_start();
include("navbar.php");
?>
<html>

<head>
  <title>Stylish Shop</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
  <div class="HomeFirstPart">

    <div class="row">
      <div class="column2">
        <br><br><br><br>
        <p class="title">Welcome</p>
        <h1>Explore & Discover Our Collections !</h1>
        <div class="button1"> <a href="AllProductPage.php">Explore Now &#8594</a></div>
      </div>
      <div class="column2"><img name="slide"> </div>
    </div>
  </div>



  <!----------------------------------New Arrivals----------------------------------------->
  <div class="products">
    <div class="row-container">
      <h1 class="title">New Arrivals</h1>

      <div class="row1">
        <div class="column3"> <img src="Products/Watches/watch4/lw1.png"><br>
          <h4>Diamond Women's Bracelet Watch</h4><br>
          <p> </p>MUR 200.00<p class="star"> &#9733 &#9733 &#9733 &#9733 &#x2606 </p>
        </div>
        <div class="column3"> <img src="Products/Clothing/manFashion/man1/m3.png"><br>
          <h4> Formal Slim Men Shirt Long sleeve</h4><br>
          <p> MUR 699.75</p>
          <p class="star"> &#9733 &#9733 &#9733 &#9733 &#x2606 </p>
        </div>
        <div class="column3"><img src="Products/head1.webp"><br>
          <h4>Lenovo Wireless Headphone</h4><br>
          <p>MUR 400.00</p>
          <p class="star"> &#9733 &#9733 &#9733 &#9733 &#x2606 </p>
        </div>
        <div class="column3"><img src="Products/Shoes/shoes6/he4.png"><br>
          <h4>Women Pointed Toe High Heel Shoes</h4><br>
          <p> MUR 490.00 </p>
          <p class="star">&#9733 &#9733 &#9733 &#9733 &#x2606 </p>
        </div>

      </div>
    </div>
  </div>
  <!-------------------------------------On sales--------------------------------------------->
  <div class="products" id="onSales">
    <div class="row-container">
      <h1 class="title">On Sale 60%OFF</h1>

      <div class="row1">
        <div class="column3"> <img src="Products/Clothing/manFashion/man1/m3.png"><br>
          <h4> Formal Slim Men Shirt Long sleeve</h4><br>
          <p><del style="color:red">MUR 699.75</del> MUR 279.99</p><br>
          <p class="star"> &#9733 &#9733 &#9733 &#9733 &#x2606 </p>
        </div>
        <div class="column3"><img src="Products/Watches/watch5/b1.png"><br>
          <h4>BeaQueen Sterling Cute Crystal Jewelry Big Flower Bracelet for Women</h4><br>
          <p><del style="color:red">MUR 380.00</del>MUR 152.00</p><br>
          <p class="star">&#9733 &#9733 &#9733 &#9733 &#x2606 </p>
        </div>
        <div class="column3"> <img src="Products/PhonesTelecommunications/phone1/ph3.png"><br>
          <h4>Samsung Galaxy 64GB 4GB RAM A40 Android phone </h4><br>
          <p><del style="color:red">MUR 7500</del>MUR 3000 </p><br>
          <p class="star"> &#9733 &#9733 &#9733 &#9733 &#x2606</p>
        </div>
        <div class="column3"> <img src="Products/Shoes/shoes2/sw2.png"><br>
          <h4> Newly Men's Quality Patent Leather Leather Soft Wedding Shoes </h4><br>
          <p><del style="color:red">MUR 925.00</del> MUR 370</p><br>
          <p class="star"> &#9733 &#9733 &#9733 &#9733 &#9733 </p>
        </div>

      </div>
    </div>
  </div>


  <!------------------------------------specialOffer---------------------------------------->
  <div class="offer">
    <div class="small-container">
      <div class="row1">
        <div class="column4">
          <img src="Products/Watches/watch2/wt1.png" class="offer-img">
        </div>
        <div class="column4">
          <p><strong>Exclusively Available on Stylish Boutique</strong></p>
          <small><strong>get rid bulkiness enjoy lightness</strong></small>
          <h1>Sports Watch</h1>
          <small><strong>smart watch with 15 features sleepmonitoring Bloodpressure HeartRate step Calories Multiplesports Remotecamera Blood oxygen Incomingcall Informationreminder Longstanby Alarm Musiccontrol FindPhone</strong></small>
          <br>
          <a href="" class="button1">Buy Now &#8594;</a>
        </div>
      </div>
    </div>

  </div>
  <script>
    var i = 0; // Start Point
    var images = []; // Images Array
    var time = 2000; // Time Between Switch

    // Image List
    images[0] = "Images/aquarium-centre-commercial-dubai.webp";
    images[1] = "Images/Best-shopping-places-dubai-860x574.jpg";
    images[2] = "Images/family.jpg";
    images[3] = "Images/slide.jpg";
    images[4] = "Images/slide2.jpg";

    // Change Image
    function changeImg() {
      document.slide.src = images[i];

      // Check If Index Is Under Max
      if (i < images.length - 1) {
        // Add 1 to Index
        i++;
      } else {
        // Reset Back To O
        i = 0;
      }

      // Run function every x seconds
      setTimeout("changeImg()", time);
    }

    // Run function when page loads
    window.onload = changeImg;
  </script>

  <?php

  include("Footer.php");
  ?>


</body>

</html>