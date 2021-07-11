<?php
session_start();

$pageTitle = "Dashboard | update Module";
require_once 'includes/templates/header.php';
include 'init.php';
?>
<h1 class='text-center'>Update Page</h1>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $id       = $_POST['id'];
      $name     = $_POST['name'];
      $address  = $_POST['address'];
      $phone    = $_POST['phone'];
      $disc     = $_POST['disc'];
      $module   = $_POST['module'];
      echo $module . $disc;
      $stmt = $con->prepare("UPDATE $module SET name = ?, address = ?, phone = ?, disc = ? WHERE id = ? ");
              $stmt->execute(array($name, $address, $phone, $disc, $id));
              echo "Module Updated";
              header('location: dashboard.php?do='.$module);
     }else{

       header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
     }
?>
