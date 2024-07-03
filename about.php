<?php
session_start();
require_once "./config.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
   <?php include("./includes/header.php") ?>
</head>
  <body>
    <!-- nav bar start -->
  <?php include("./includes/navbar.php") ?>
    <!-- nav bar end -->

    <div class="container">
    <h1 class="text-center mt-5">About Us</h1>
    <div class="row mt-4">
      <div class="col-md-6">
        <h2>Our Story</h2>
        <p>The customer is very important, the customer will be followed by the customer. There is nothing easy. We do not live in the hospital. But the letter of the bow from the fear of consequence, nor does it take a different mauris. Not even the players. He needs a whole lot more now.</p>
        <p>There is nothing easy. There is no mauris nor ex placerat quiver and ac eros. The fusce valley needs an arc and a desire. We do not live with hatred, but with the fear of trucks.</p>
        <h3>Meet the Owner</h3>
        <img src="./uploads/owner.jpg" alt="Owner" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2>Our Mission</h2>
        <p>Our mission is to provide high-quality products and exceptional service to our customers. We strive to exceed expectations and build lasting relationships.</p>
        <p>The customer is very important, the customer will be followed by the customer. There is nothing easy. We do not live in the hospital.</p>
        <h3>Why We Created This Ecommerce Website</h3>
        <p>We created this ecommerce website to showcase our skills in full-stack development as part of our journey towards securing a full-stack internship. Our goal is to demonstrate our ability to design, develop, and deploy a fully functional e-commerce platform.</p>
      </div>
    </div>
  </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script` -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>