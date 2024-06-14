<?php 
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
                    <img src="./assets/images/electronics.png" class="card-img-top" alt="electronics">
                    <div class="card-body">
                      <h5 class="card-title">Electronics</h5>
                      <p class="card-text">
                        <ul>
                          <li>Mobile</li>
                          <li>Laptop</li>
                          <li>Camera</li>
                          <li>Lens</li>
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
                    <img src="./assets/images/cosemtics.png" class="card-img-top" alt="cosemetics">
                    <div class="card-body">
                      <h5 class="card-title">Cosmetics</h5>
                      <p class="card-text">
                        <ul>
                          <li>Oil</li>
                          <li>Cream</li>
                          <li>Lipstick</li>
                          <li>Powder</li>
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
                    <img src="https://t4.ftcdn.net/jpg/04/42/21/53/240_F_442215355_AjiR6ogucq3vPzjFAAEfwbPXYGqYVAap.jpg" class="card-img-top" alt="games" height="300px">
                    <div class="card-body">
                      <h5 class="card-title">Games</h5>
                      <p class="card-text">
                        <ul>
                          <li>Rockstar</li>
                          <li>Ubisoft</li>
                          <li>Epic games</li>
                          <li>Steam</li>
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

    <!-- section 3 -->
    <div id="products" class="container">
      <div class="row">
          <h2 class="text-dark text-center">Products</h2>
          
          <!-- categories card 1 -->
          <div class="col-sm-12 col-md-4">
              <div class="card">
                  <img src="" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>
          <!-- categories card 1 end -->
          
           <!-- categories card 2 -->
           <div class="col-sm-12 col-md-4">
              <div class="card">
                  <img src="./uploads/books.jpg" class="card-img-top" alt="books">
                  <div class="card-body">
                    <h5 class="card-title">Books</h5>
                    <p class="card-text">
                      <ul>
                        <li>Motivational Books</li>
                        <li>Fantasy Books</li>
                        <li>Novels</li>
                        <li>Biography</li>
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
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>
          <!-- categories card 3 end -->
      </div>
    </div>
  <!-- section 3 end -->

<!-- Section 4: Testimonials Carousel -->
<div id="testimonials" class="container-fluid bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-5">Testimonials</h2>
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