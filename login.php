<?php
require_once("./config.php");
session_start();
if (empty($_SESSION["id"])) {
  header("Loaction: login.php");
}
if (isset($_POST["submit"])) {
  $username = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$username' ");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if (password_verify($password, $row['password'])) {
      $_SESSION["login"] = true;
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      header("Location: index.php");
    } else {  
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  } else {  
    echo
    "<script> alert('User Not Registered'); </script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
   <?php include("./includes/header.php")?>
  </head>
  <body>
  <?php include("./includes/navbar.php")?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 mx-auto my-4">
            <!-- registration form -->

            <div class="card">
                <h6 class="card-title text-center">Login</h6>
                <hr>
                <!-- registration form code -->
                <form class="p-2" action="" method="post ">
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                  </form>
                  <!-- registraion form code ends -->
            </div>
        </div>
    </div>
</div>
   


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>