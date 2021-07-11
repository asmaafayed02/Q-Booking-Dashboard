<?php
  ob_start();

  session_start();
  if (isset($_SESSION['username'])) {

    $pageTitle = "Dashboard - Add Module";
    require_once 'includes/templates/header.php';
    include 'init.php';


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $disc = $_POST['disc'];
        $module = $_POST['module'];

        $stmt = $con -> prepare("INSERT INTO $module(name, address, phone, disc)
                                 VALUES(:name, :address, :phone, :disc)");
        $stmt ->execute([
          ':name' => $name,
          ':address' => $address,
          ':phone' => $phone,
          ':disc' => $disc
        ]);
        echo "Module added successfully";
    }
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" required/>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required/>
        </div>
        <div class="form-group">
            <label>Discription</label>
            <input type="text" name="disc" required/>
        </div>
        <div class="form-group">
            <label>Module</label>
            <select name="module" required>
              <option value="" selected disabled>Select Module</option>
              <option value="hospital">Hospital</option>
              <option value="clincs">Clinics</option>
              <option value="coffee">Coffee</option>
              <option value="resturant">Resturant</option>
            </select>
        </div>
        <input class="submit" type="submit" value="Add Module"  />
    </form>
</div>
</div>
</body>
</html>
<?
    }else {

        header('location: index.php');
        exit();
    }

    ob_end_flush();
?>
