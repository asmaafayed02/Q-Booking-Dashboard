<?php
  session_start();

  $pageTitle = "Dashboard | Login";
  require_once 'includes/templates/header.php';

  if (isset($_SESSION['username'])) {

          header('location: dashboard.php'); //redircet to dashborad
  }

  include 'init.php';

  // Chech if user Coming from HTTP Post Request

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $email = $_POST['email'];
      $password = $_POST['pass'];
      $hashedpass = sha1($password);

      //chech if user exist in Database

      $stmt = $con -> prepare("SELECT user_id , username, email, password , full_name
                               From users
                               WHERE  email = :email AND password = :password AND group_id = 1");
      $stmt ->execute([

        ':email' => $email,
        ':password' => $hashedpass

      ]);
      $row = $stmt-> fetch();
      $count = $stmt->rowCount();
      // if Count > 0 This Mean the Database Contain Record About this Username

      if ($count > 0 ) {

          echo "welcome" . $row['username'];
          $_SESSION['username'] = $row['username']; //Register Session Name
          $_SESSION['id']       = $row['user_id']; //Register Session ID
          $_SESSION['fullname'] = $row['full_name']; //Register Session Fullname
          header('location: dashboard.php?do=dashboard'); //redircet to dashborad
          exit();
      }

  }
?>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top flex-md-nowrap shadow">
        <div class="container-fluid">
            <a class="navbar-brand ms-3 " href="#"> Admin panel</a>

            </div>
      </nav>
      <!-- Header -->
      <header class="header mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center">Admin Area <small>Acount login</small></h1>
                  </div>
              </div>
          </div>
      </header>

      <!-- main -->
      <main role="main" class="container col-md-8">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="login">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                      </form>
                  </div>
              </div>
          </div>
      </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
