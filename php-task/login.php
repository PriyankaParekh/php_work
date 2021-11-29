<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>

body{
      background-image: url('images/background.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      min-height: 100vh;
    }
.btn{
  width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;
    text-transform: uppercase;
    border-radius: 50px;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}

.btn:hover {
    background-position: 100% 0;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn:focus {
    outline: none;
}

    </style>
</head>

<body>
  <?php

  include 'config.php';

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userQuery = "select * from register where username = '$username' ";
    $userExists = mysqli_query($con, $userQuery);

    if ($userExists) {

      $dbRow = mysqli_fetch_assoc($userExists);
      $dbpwd = $dbRow['password'];

      $verifyPwd = password_verify($password, $dbpwd);

      if ($verifyPwd) {
        $dbuserId = $dbRow['id'];

        $searchQuery = "select * from details where user_id = '$dbuserId' ";
        $runSearchQuery = mysqli_query($con, $searchQuery);
        $detailsRow = mysqli_fetch_assoc($runSearchQuery);

        $_SESSION['username'] = $username;
        $_SESSION['name'] = $detailsRow['name'];
        $_SESSION['email'] = $detailsRow['email'];
        $_SESSION['phone'] = $detailsRow['phone_no'];
        $_SESSION['city'] = $detailsRow['city'];
        $_SESSION['enum'] = $detailsRow['enrollment_no'];
        $_SESSION['photo'] = $detailsRow['photo'];

        header('location:home.php');
      } else {
  ?>
        <script>
          alert('password invalid.');
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        alert('User Not Exists.');
      </script>
  <?php
    }
  }

  ?>



  <section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;  background-color:beige;">
              <div class="card-body">
                <h2 class="text-uppercase text-center mb-3">Login</h2>
                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                  <div class="form-outline mb-4">
                    <input required placeholder="Enter Username" name="username" type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-4">
                    <input required placeholder="Enter Password" name="password" type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg text-body">
                      Login
                    </button>
                  </div>

                  <p class="text-center text-muted mt-2 mb-0">
                    New user?
                    <a href="registration.php" class="fw-bold text-body"><u>Register</u></a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>