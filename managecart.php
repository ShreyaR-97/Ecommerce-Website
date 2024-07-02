<?php
session_start();

//if (empty($_GET['valid'])) {
    //header("Location: index.php");
   // exit();
//}

if (isset($_GET['clearcart'])) {
    unset($_SESSION['cart']);
    unset($_SESSION['price']);
    header("Location: index.php");
    exit();
}

if (isset($_GET['remove'])) {
    $product = $_GET['products'];
    $price = $_GET['price'];

    // Ensure the cart is initialized
    if (isset($_SESSION['cart']) && isset($_SESSION['price'])) {
        // Find the index of the product to remove
        $productKey = array_search($product, $_SESSION['cart']);
        $priceKey = array_search($price, $_SESSION['price']);

        // Unset the product and price if they exist in the cart
        if ($productKey !== false) {
            unset($_SESSION['cart'][$productKey]);
        }

        if ($priceKey !== false) {
            unset($_SESSION['price'][$priceKey]);
        }

        // Re-index the arrays
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        $_SESSION['price'] = array_values($_SESSION['price']);
    }

    header("Location: cart.php");
    exit();
}

if (isset($_GET['checkout'])) {
    unset($_SESSION['cart']);
    unset($_SESSION['price']);
    header("Location: orderconfirmation.php");
    exit();
}
?>
