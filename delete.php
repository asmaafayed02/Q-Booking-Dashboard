<?php
session_start();

$pageTitle = "Dashboard | update Module";
require_once 'includes/templates/header.php';
include 'init.php';
?>
<h1 class='text-center'>Delete Page</h1>
<?php

        //Check If Get Request UserID is Numeric & Get The Integer Value Of it

      $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
      $module = $_GET['module'];
      
        // Select all Data depend on This ID

      $check = checkItem('id', $module, $id);

      if($check > 0) {

        $stmt = $con->prepare('DELETE FROM :module WHERE id = :id');
        $stmt->execute([
          'module' => $module,
          'id' => $id
        ]);

        if ($stmt->rowCount()) {

            $theMsg = '<div class="alert alert-success">' . $stmt->rowCount() . ' User Delete</div>';
        }
      }

?>
