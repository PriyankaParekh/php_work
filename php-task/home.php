<?php
session_start();
if (!$_SESSION['username']) {
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>
    body {
      background-image: url('images/5026563.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 100vh;
    }

    .card1 {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    .navbar-nav .nav-item .nav-link:hover{
    border: 2px solid black;
    color: black;
    border-radius: 0.2rem;
    text-align: center;
    align-items: center;
    }
    .navbar-nav .nav-item .nav-link{
    color: black;
    }
    .card1{
      overflow-wrap: break-word;
    }
  </style>
</head>

<body>
  <!-- navbar start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">PHP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item p-2">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link" aria-current="page" href="login.php">Login</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link" aria-current="page" href="registration.php">Register</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link" aria-current="page" href="logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar end-->
  <!-- page start -->
  <div class="card1 m-5">
    <h1 style="text-transform: uppercase; text-align:center; border-bottom: 2px solid black" class="mb-5">Your Profile</h1>
    <img src="<?php echo $_SESSION['photo']; ?>" style="border-radius: 50%; height: 8rem; width: 8rem;">
    <h4 class="text-align-center">User name:<?php echo $_SESSION['username']; ?></h4>
    <h4>Name:<?php echo $_SESSION['name']; ?></h4>
    <h4>Enrollment Number:<?php echo $_SESSION['enum']; ?></h4>
    <h4>Email:<?php echo $_SESSION['email']; ?></h4>
    <h4>Phone number:<?php echo $_SESSION['phone']; ?></h4>
    <h4>City:<?php echo $_SESSION['city']; ?></h4>
  </div>



  <!-- page end -->
  <!-- bundle link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- js link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>