<?php session_start();?>
<?php include 'header.php'?>
<div class="row" style="background-image:url(image/1_xAFAiAxqZVrOVLBTo9tf6w.jpeg); background-position:center; background-repeat:no-repeat; background-size:cover;height:700px;"><div class="col-md-1" ></div>
<div class="col-md-4" style="padding-top:130px">
<form action="" method="post">
 <h5  align="center" style="font-size:50px ; color:#FFF; font-family:Georgia, 'Times New Roman', Times, serif"> Admin Login </h5>
<hr />
<h5 style="font-size:large ; color:#FFF"> Username </h5>
<input type="text" name="un" placeholder="Username"  class="form-control" /><br/>
<h5 style=" color:#FFF"> Password </h5>
<input type="password" name="pwd" placeholder="Password" class="form-control"  /><br/>
<button type="submit" name="Save" class="btn  btn-success" > Submit </button>
</form><br /><hr />
<?php 
if(isset($_POST['Save'])) {
	$sql="select * FROM admin WHERE username='$_POST[un]' AND password='$_POST[pwd]'";
	$result=$conn->query($sql);
	if ($result->num_rows>0){
	$_SESSION['un']=$_POST['un'];
	echo"<script>window.location='admin/dashboard.php';</script>";
} else {
	echo" <br/> <script> alert('Invalid Username or Password') </script> </div>";
} 
} 
?>
</div></div>
 <div class="col-md-4"></div>
<?php include 'footer1.php'?>