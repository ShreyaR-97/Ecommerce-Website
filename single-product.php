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


    <div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <img src="https://via.placeholder.com/400" class="img-fluid" alt="Product Image">
    </div>
    <div class="col-md-6">
      <h2 class="mb-4">Product Name</h2>
      <p class="lead">Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies massa a nisi consectetur, vel sollicitudin libero interdum.</p>
      <p><strong>Price:</strong> $XX.XX</p>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" id="quantity" class="form-control" value="1" min="1">
      </div>
      <button class="btn btn-primary">Add to Cart</button>
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