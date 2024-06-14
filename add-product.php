<?php 
require_once "config.php";

if(isset($_POST['submit'])){
 $pname =  $_POST['productName'];
 $description = $_POST['productDescription'];
 $price = $_POST['productPrice'];

 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["productImage"]["name"]);
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
 // Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
   $check = getimagesize($_FILES["productImage"]["tmp_name"]);
   if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
     $uploadOk = 1;
   } else {
     echo "File is not an image.";
     $uploadOk = 0;
   }
 }
 
 // Check if file already exists
 if (file_exists($target_file)) {
   echo "Sorry, file already exists.";
   $uploadOk = 0;
 }
 
 // Check file size
 if ($_FILES["productImage"]["size"] > 500000) {
   echo "Sorry, your file is too large.";
   $uploadOk = 0;
 }
 
 // Allow certain file formats
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
   $uploadOk = 0;
 }
 
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
   echo "Sorry, your file was not uploaded.";
 // if everything is ok, try to upload file
 } else {
   if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
     echo "The file ". htmlspecialchars( basename( $_FILES["productImage"]["name"])). " has been uploaded.";
   } else {
     echo "Sorry, there was an error uploading your file.";
   }
 }

$pimage = htmlspecialchars( basename( $_FILES["productImage"]["name"]));




 $insert = "INSERT INTO products(product_name,description,price,discount_price,product_image) VALUES('$pname','$description',$price,'0','$pimage')";

 if(mysqli_query($conn,$insert)){
  echo "<script>alert('product added successfully') </script>";
 }else{
  echo "<script>alert('product not added') </script>";
 }

}




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
    <h1 class="text-center mt-5">Add Product</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="productName" name="productName" required>
      </div>
      <div class="mb-3">
        <label for="productDescription" class="form-label">Product Description</label>
        <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice" name="productPrice" min="0.01" step="0.01" required>
      </div>
      <div class="mb-3">
        <label for="productImage" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" required>
      </div>
      <div class="mb-3 d-grid gap-2 d-md-flex justify-content-center">
        <button type="submit" class="btn btn-primary me-md-2" name="submit" value="submit">Add Product</button>
        <button type="submit" class="btn btn-success">Save & Add Another</button>
      </div>
    </form>
  </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script` -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>