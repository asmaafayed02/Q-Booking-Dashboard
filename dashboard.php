<?php
  ob_start();

  session_start();
  if (isset($_SESSION['username'])) {

    $pageTitle = "Dashboard";
    require_once 'includes/templates/header.php';
    include 'init.php';
?>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top flex-md-nowrap shadow">
        <div class="container-fluid">
          <a class="navbar-brand ms-3" href="#">Q-Booking</a>
            <div class="d-flex me-3">
                <a class="btn btn-outline-light" href="logout.php">LogOut</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Header -->
      <header class="header mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-10">
                        <h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                              </svg>
                             Dashboard <small>manage your site</small></h1>
                  </div>
                  <div class="col-md-2">
                    <div class=" header-create">
                        <button class="btn  bg-light" type="button" aria-expanded="false">
                          <a href="add.php">Add Module</a>
                        </button>
                      </div>
                  </div>
              </div>
          </div>
      </header>


      <!-- Contianer -->
      <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-md-2 bg-dark d-none d-md-block sidebar"></div>
                    <div class="sidebar-left">
                        <ul class="nav flex-column sidebar-nav">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="dashboard.php?do=dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                Dashboard</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="dashboard.php?do=clincs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                  Clinics</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="dashboard.php?do=hospital">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                  Hospital</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="dashboard.php?do=coffe">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                    Coffee</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="dashboard.php?do=resturant">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                    Resturant</a>
                              </li>
                          </ul>
                    </div>
            </div>
      </div>

      <!-- main -->
      <main role="main" class="container col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="position-absolute top-50 start-50 translate-middle">
          <?php if (isset($_GET['do']) && $_GET['do']  == 'dashboard'):
            $stmt = $con -> prepare("SELECT
                                      (SELECT COUNT(user_id) FROM users) AS numOfUsers,
                                      (SELECT COUNT(id) FROM clincs) as numOfClinics,
                                      (SELECT COUNT(id) FROM hospital) AS numOfHospitals,
                                      (SELECT COUNT(id) FROM coffee) AS numOfcoffee,
                                      (SELECT COUNT(id) FROM resturant) AS numOfresturants ");
            $stmt ->execute();
            $row = $stmt-> fetch();
            $count = $stmt->rowCount();
            ?>
            <table class="table table-striped table-dark table-hover">
              <thead>
                <th>number of users</th>
                <th>number of Clinics</th>
                <th>number of Hospitals</th>
                <th>number of Coffee</th>
                <th>number of Resturants</th>
              </thead>
              <tbody>
                <tr>
                    <td><?php echo $row['numOfUsers']; ?></td>
                    <td><?php echo $row['numOfClinics']; ?></td>
                    <td><?php echo $row['numOfHospitals']; ?></td>
                    <td><?php echo $row['numOfcoffee']; ?></td>
                    <td><?php echo $row['numOfresturants']; ?></td>
                </tr>
              </tbody>
            </table>

          <? elseif(isset($_GET['do']) && $_GET['do']  == 'clincs'):
            $stmt = $con -> prepare("SELECT * From clincs");
            $stmt ->execute();
            $rows = $stmt-> fetchAll();
          ?>
          <table class="table table-striped table-dark table-hover">
            <thead>
              <th>Id</th>
              <th>Name</th>
              <th>Address</th>
              <th>phone</th>
              <th>Discription</th>
              <th>Action</th>
            </thead>
            <tbody>
              <?php
              foreach ($rows as $row ) {
              ?>
              <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['disc']; ?></td>
                  <td>
                      <a href='edit.php?id=<?php echo $row['id']; ?>&module=clincs' class='btn btn-primary'>Edit</a>
                      <a href='delete.php?id=<?php echo $row['id']; ?>&module=clincs'class='btn btn-danger'>Delete</a>
                  </td>
              </tr>
              <?php } ?>
            </tbody>
        </table>
          <? elseif(isset($_GET['do']) && $_GET['do']  == 'hospital'):
          $stmt = $con -> prepare("SELECT * From hospital");
          $stmt ->execute();
          $rows = $stmt-> fetchAll();
        ?>
        <table class="table table-striped table-dark table-hover">
          <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Discription</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
            foreach ($rows as $row ) {
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['disc']; ?></td>
              <td>
                  <a href='edit.php?id=<?php echo $row['id']; ?>&module=hospital' class='btn btn-primary'>Edit</a>
                  <a href='delete.php?id=<?php echo $row['id']; ?>&module=hospital'class='btn btn-danger'>Delete</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      <? elseif(isset($_GET['do']) && $_GET['do']  == 'coffe'):
      $stmt = $con -> prepare("SELECT * From coffee");
      $stmt ->execute();
      $rows = $stmt-> fetchAll();
    ?>
    <table class="table table-striped table-dark table-hover">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Discription</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
        foreach ($rows as $row ) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['disc']; ?></td>
            <td>
                <a href='edit.php?id=<?php echo $row['id']; ?>&module=coffee' class='btn btn-primary'>Edit</a>
                <a href='delete.php?id=<?php echo $row['id']; ?>&module=coffee'class='btn btn-danger'>Delete</a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  <? elseif(isset($_GET['do']) && $_GET['do']  == 'resturant'):
    $stmt = $con -> prepare("SELECT * From resturant");
    $stmt ->execute();
    $rows = $stmt-> fetchAll();
      ?>
    <table class="table table-striped table-dark table-hover">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Discription</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
        foreach ($rows as $row ) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['disc']; ?></td>
            <td>
                <a href='edit.php?id=<?php echo $row['id']; ?>&module=resturant' class='btn btn-primary'>Edit</a>
                <a href='delete.php?id=<?php echo $row['id']; ?>&module=resturant'class='btn btn-danger'>Delete</a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
          <? endif; ?>
        </div>
      </main>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>CKEDITOR.replace( 'editor1' );</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?
    }else {

        header('location: index.php');
        exit();
    }

    ob_end_flush();
?>
