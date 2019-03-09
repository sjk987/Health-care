<?php include 'header.php' ?>
<div class="row">
<div class="col-md-3"> </div>
<div class="col-md-6"><br/><br/>
<h4  align="center" style=" font-family:'Comic Sans MS', cursive; color:#000" >Reset Password</h4> <br/> 
<form action="" method="post"> 
OTP
<input type="text" name="otp" placeholder="Otp"  class="form-control" /><br/>
New Password
<input type="password" name="p1" placeholder="New Password"  class="form-control" /> <br/>
Confirm Password
<input type="password" name="p2" placeholder="Confirm Password"   class="form-control"/><br/>
<button type="submit" name="reset" class="btn btn-block btn-success"  /> Reset  </button>
</form>
<?php
if(isset($_POST['reset']))
{
	if($_POST['otp']==$_SESSION['code'])
	{
		if($_POST['p1']==$_POST['p2'])
		{
			$sql="update users set password='$_POST[p1]' WHERE email='$_GET[id]';";
			if($conn->query($sql)===TRUE)
				{
		echo"<br/> <script> alert('Password Changed Successfully') </script> ";
	            }
		else
		{
		echo"ERROR:" .$sql."<br>".$conn->error;
	    }}
	else
	{
	echo "Password Not Matched";
	}}
else
{ 
echo"Enter Correct OTP";
}}
 ?>
</div>
 </div>
 <div class="col-md-3"></div>
<?php include 'footer.php'?>