<?php
require_once('./config.php');
session_start();
if (empty($_SESSION["id"])) {
  header("Location: login.php");
}


if(empty($_GET['valid'])){
  header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <?php include "./includes/header.php"; ?>
    <?php include "./includes/navbar.php"; ?>

</head>
<body>
  

<div class="container">
  <div class="row d-flex justify-content-center">
  <div class="card" style="width: 45rem;">
  <div class="card-body">
    <h3 class="card-title">Check Out</h3>
    <h3>Price : &#8377; <?php echo $_SESSION['totalprice'];?></h3>
    <form action="managecart.php" method="get">
      <input type="text" class="form-control my-2" placeholder="Name" required>
      <input type="text" class="form-control my-2" placeholder="Phone number" required>
      <input type="email" class="form-control my-2" placeholder="Email" required>
      <textarea type="text" class="form-control my-2" cols="30" rows="2" placeholder="Address" required></textarea>
    

    <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>India</option>
                <option>United States</option>
                <option>Italy</option>
                <option>South Korea</option>
                
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>Karnataka</option>
                <option>New York</option>
                <option>Rome</option>
                <option>Seoul</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-4">
              <label for="city" class="form-label">City</label>
              <select class="form-select" id="city" required>
                <option value="">Choose...</option>
                <option>Bengaluru</option>
                <option>Washington</option>
                <option>Milan</option>
                <option>Gangnam</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>


            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="number" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>
          <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">COD - Cash On Delivery</label>
            </div>
            <button type="submit" class="btn btn-primary" name="checkout">Place Order</button>
    </form>
  </div>
</div>
  </div>
</div>



<?php include "./includes/footer.php"; ?>
</body>
</html>