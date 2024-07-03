<?php
session_start();
require_once "./config.php";

// Ensure the session variables exist and are arrays
$cart = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];
$price = isset($_SESSION['price']) && is_array($_SESSION['price']) ? $_SESSION['price'] : [];

$cartitem = implode(',', array_unique($cart));
$_SESSION['cart_items'] = $cartitem;

$product = trim($cartitem, ',');

$productprice = implode(',', array_unique($price));

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

    <div class="container mt-5">
        <h1 class="mb-4">Cart</h1>
        <div class="row">
            <?php
            // Debug: Print the $product variable
            

            // Check if $product is not empty before executing the query
            if (!empty($product)) {
                $show = "SELECT * FROM products WHERE id IN ($product)";
                if ($result = mysqli_query($conn, $show)) {
                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="col-md-4">
                                <div class="card product-card">
                                    <img src="uploads/<?php echo $row['product_image']; ?>" class="card-img-top" alt="Product Image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                        <p class="card-text"><?php echo $row['description']; ?></p>
                                        <p class="card-text"><strong>Price:</strong> Rs. <?php echo $row['price']; ?></p>
                                        <div class="d-flex justify-content-evenly">
                                            <form action="managecart.php" method="get">
                                                <input type="text" name="products" value="<?php echo $row['id']; ?>" style="display:none">
                                                <input type="text" name="price" value="<?php echo $row['price']; ?>" style="display:none">
                                                <button type="submit" class="btn btn-outline-danger" name="remove">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                        ?>

                         <div class="d-flex justify-content-center">
                <form class="text-center mx-5" action="checkout.php" method="get">
                    <input type="text" name="valid" value="200" hidden>
                    <button class="btn btn-success" type="submit" name="checkout">Checkout</button>
                </form>
                <form class="text-center" action="managecart.php" method="get">
                    <input type="text" name="valid" value="200" hidden>
                    <button class="btn btn-danger" href="managecart.php" type="submit" name="clearcart" value="clear">Empty Cart</button>
                </form>
            </div>

                        <?php
                        mysqli_free_result($result);
                    } else {
                        echo '<p class="my-5"><b>No Products</b></p>';
                    }
                } else {
                    echo 'Error: ' . mysqli_error($conn);
                }
            } else {
                echo "No Products in cart";
            }

            ?>

           

            <?php
            $_SESSION['totalprice'] = array_sum($price);
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <script src="./assets/js/main.js"></script>
</body>
</html>
