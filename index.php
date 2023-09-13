<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>
<?php include ('header.php') ?>

<?php include ('sidebar.php') ?>



<?php
  include "footer.php";
  ?>