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

    <!-- section 1 -->
      <div class="container-fluid section-1">
        <div class="row">
            <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
                <h1 class="section-1-heading text-center text-white">
                    Welcome to JK's Ecommerce
                </h1>

                <a href="#products" class="btn btn-outline-light mt-4">Explore our products</a>
            </div>
           
            <div class="col-sm-12 col-md-6">
              <dotlottie-player class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></dotlottie-player>
            </div>
        </div>
      </div>
    <!-- section 1 end -->
<hr>
  
     <!-- section 2 -->
     <div class="container">
        <div class="row">
            <h2 class="text-dark text-center">Categories</h2>
            
            <!-- categories card 1 -->
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./uploads/clothes.jpg" class="card-img-top" alt="electronics">
                    <div class="card-body">
                      <h5 class="card-title">Clothes</h5>
                      <p class="card-text">
                        <ul>
                          <li>Co-Order Set</li>
                          <li>Trendy Tops</li>
                          <li>Dress</li>
                          <li>Trousers</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Explore more </a>
                    </div>
                  </div>
            </div>
            <!-- categories card 1 end -->
            
             <!-- categories card 2 -->
             <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./uploads/cosmetic.jpg" class="card-img-top" alt="cosemetics">
                    <div class="card-body">
                      <h5 class="card-title">Cosmetics</h5>
                      <p class="card-text">
                        <ul>
                          <li>Skincare</li>
                          <li>Perfume</li>
                          <li>Beauty Products</li>
                          <li>Haircare</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Explore more</a>
                    </div>
                  </div>
            </div>
            <!-- categories card 2 end -->

             <!-- categories card 3 -->
             <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./uploads/footware.jpg" class="card-img-top" alt="games" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">Footware</h5>
                      <p class="card-text">
                        <ul>
                          <li>Sandal</li>
                          <li>High-Heal</li>
                          <li>Sneaker</li>
                          <li>Wedge</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Explore more</a>
                    </div>
                  </div>
            </div>
            <!-- categories card 3 end -->
        </div>
      </div>
    <!-- section 2 end -->

    <hr>

    <!-- header carousel section starts here -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./uploads/sale1.jpg" class="d-block w-100" alt="First Slide">
    </div>
    <div class="carousel-item">
      <img src="./uploads/sale2.jpg" class="d-block w-100" alt="Second Slide">
    </div>
    <div class="carousel-item">
      <img src="./uploads/sale3.jpg" class="d-block w-100" alt="Third Slide">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr>


    <!-- section 3 -->
    <div id="products" class="container">
      <div class="row">
          <h2 class="text-dark text-center">Products</h2>
          
          <!-- categories card 1 -->
          <?php
$show = "SELECT * FROM products LIMIT 6";


if($result = mysqli_query($conn,$show)){
  if(mysqli_num_rows($result)>0){
    $i= 1; while($row = mysqli_fetch_array($result)){ ?>

    <div class="col-md-4">
      <div class="card product-card">
        <img src="uploads/<?php echo $row['product_image'];?>" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['product_name'];?></h5>
          <p class="card-text"><?php echo $row['description'];?></p>
          <p class="card-text"><strong>Price:</strong>Rs. <?php echo $row['price'];?></p>
          <a href="#" class="btn btn-primary">View Details</a>
        </div>
      </div>
    </div>

    <?php  }
    mysqli_free_result($result);
  }else{
    echo "no products";
  }
}else{
  echo "Failed to fetch";
}
?>
          <!-- categories card 1 end -->
      </div>
    </div>
  <!-- section 3 end -->

<!-- Section 4: Testimonials Carousel -->
<div id="testimonials" class="container-fluid bg-light py-5">
  <div class="container">
    <h2 clastext-center mb-5">Testimonials</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Testimonial items -->
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card testimonial-card">
                <div class="card-body">
                  <p class="card-text">"A great shopping experience! Will definitely come back again."</p>
                  <footer class="blockquote-footer">John Doe</footer>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Add more testimonial items similarly -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card testimonial-card">
                <div class="card-body">
                  <p class="card-text">"Excellent products and fast delivery. Highly recommended!"</p>
                  <footer class="blockquote-footer">Jane Smith</footer>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<!-- Section 4 end -->


<div class="b-example-divider"></div>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script` -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>