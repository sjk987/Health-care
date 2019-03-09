<?php include 'header.php' ; ?>
<?php
unset($_SESSION['ul']);
session_destroy();
echo "<script> window.location='../index.php';</script>";
?>
<?php include 'footer.php' ?>
