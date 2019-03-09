<?php session_start();
if(!isset($_SESSION['ul']))
echo "<script> window.location='../index.php'; </script>";
?>
<?php include 'sidebar.php' ?> 
<?php include '../db.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Header</title>
<link href="../css/bootstrap.min.css" rel="stylesheet"  />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
