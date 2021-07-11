<?php
  ob_start();

  session_start();
  if (isset($_SESSION['username'])) {

    $pageTitle = "Dashboard - Edit Module";
    require_once 'includes/templates/header.php';
    include 'init.php';

    //Check If Get Request UserID is Numeric & Get The Integer Value Of it

     $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
     $module  = $_GET['module'];

       // Select all Data depend on This ID
     $stmt = $con -> prepare("SELECT * From $module WHERE id = ?  LIMIT 1");

       // Execute Query
     $stmt ->execute(array($id));

       // Fetch The Data From DataBase
     $row = $stmt -> fetch();

       //The Row Conut
     $count = $stmt ->rowCount();

       // If There is Sucj ID Show The form
       if($count > 0) {
       ?>

<div id="main-content">
    <button type="button" name="button"> <a href="index.php">Back to Dashboard</a> </button>
    <h2>Edit Module</h2>
    <form class="post-form" action="update.php" method="post">
        <input type="text" name="id" value="<? echo $id;?>" hidden>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required value="<? echo $row['name'];?>"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" required value="<? echo $row['address'];?>"/>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required value="<? echo $row['phone'];?>"/>
        </div>
        <div class="form-group">
            <label>Discription</label>
            <input type="text" name="disc" required value="<? echo $row['disc'];?>"/>
        </div>
        <input type="text" name="module"  hidden value="<? echo $module;?>">
        <input class="submit" type="submit" value="Edit this Module"  />
    </form>
</div>
</div>
</body>
</html>
<?
      }else {
          echo "this is no such ID";
          header('location: index.php');
          exit();
      }
    }else {
        header('location: index.php');
        exit();
    }
    ob_end_flush();
?>
