<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("./includes/navbar.php");
session_start();

// Initialize the cart if it's not set or is not an array
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <?php include("./includes/header.php") ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>Cart</h1>
            </div>
            <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $total = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $sr = $key + 1;
                        $total += $value['Price'];
                        echo "<tr>
                                <td>{$sr}</td>
                                <td>" . htmlspecialchars($value['Item_Name']) . "</td>
                                <td>{$value['Price']}</td>
                                <td><input class='text-center' type='number' value='{$value['Quantity']}' min='1' max='10'></td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                    <input type='hidden' name='Item_Name' value='" . htmlspecialchars($value['Item_Name']) . "'>
                                </form>
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>    
            </div>
            <div class="col-lg-4">
                <div class="border bg-light rounded p-4">
                    <h4>TOTAL</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <form>
                        <button class="btn btn-primary btn-block">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
