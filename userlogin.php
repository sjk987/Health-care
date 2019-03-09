<?php session_start();?>
<?php include 'db.php' ?>

<?php include 'header1.php'?>
<div class="row" style="background-image:url(image/board-bread-breakfast-349610.jpg);  background-repeat:no-repeat; 
background-position:center; background-size:cover; height:600px">
<div class="col-md-3"></div>
<div class="col-md-4"><br/><br/>
<h4 align="center" style="color:#333; font-family:Quikhand; font-size:60px">LOGIN HERE </h4><br/>
<form action="" method="post" style="padding-top:70px; padding-bottom:70px">
<h5 align="left" style="color:#00C; font-family:'Comic Sans MS'"> Email Address </h5>
<input type="email" name="email" placeholder="Email"  class="form-control" required  /><br/>
<h5 align="left" style="color:#00C; font-family:'Comic Sans MS'"> Password </h5>
<input type="password" name="pwd" placeholder="Password" class="form-control" required  /><br/>
<h5 align="center"> <button type="submit" name="Save" class="btn btn-info"> Submit </button></h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Not a member yet?  <a href="registerform.php"> Register Here! </a> </button>
<br/>
<a href='forgetpassword.php'><p align="center"> Forget Password </p></a> 
</form>
<?php 
if(isset($_POST['Save'])) {
	$sql="select * FROM users WHERE email='$_POST[email]' AND password='$_POST[pwd]'";
	$result=$conn->query($sql);
	if ($result->num_rows>0){
	$_SESSION['ul']=$_POST['email'];
	echo"<script>window.location='user/myprofile.php';</script>";
} else {
	echo" <br/> <script> alert('Invalid Username or Password') </script> ";
} 
} 
?>

<div class="col-md-5">
<?php include 'footer.php'?>