<?php include 'header.php' ?>
<div class="row">
<div class="col-md-3"> </div>
<div class="col-md-6">
<hr /> <h3 align="center"> Change Password</h3><hr />
    
    <form action="" method="post"> 
        <h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Recent Password </h4>

<div class="input-group" > 
<span class="input-group-addon" >
<i class="fa fa-key" style="font-size:24px" > </i>
</span>
<input type="password" name="epwd" placeholder="Current Password"  class="form-control" required /></div> <br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> New Password</h4>

        <div class="input-group" > 
<span class="input-group-addon" >
<i class="fa fa-key" style="font-size:24px" > </i>
</span>
<input type="password" name="npwd" placeholder="New Password"  class="form-control"  required/></div> <br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Confirm Password </h4>
<div class="input-group" > 
<span class="input-group-addon" >
<i class="fa fa-key" style="font-size:24px" > </i>
</span>
<input type="password" name="rpwd" placeholder="Confirm Password"   class="form-control" required/></div><br/>
<button type="submit" name="Save" class="btn btn-lg btn-success" /> Reset  </button>

</form>
<?php
if(isset($_POST['Save']))
{
	$sql="SELECT password from users WHERE email='$_SESSION[ul]';";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	$row=$result->fetch_assoc();
	$pwd=$row['password'];
	if($_POST['epwd']==$pwd)
	{
		if($_POST['npwd']==$_POST['rpwd'])
		{
			$sql="update users set password='$_POST[npwd]' WHERE email='$_SESSION[ul]';";
			if($conn->query($sql)===TRUE)
			{
					if($conn->query($sql)===TRUE)
	{
		echo"<br/> <script> alert('Password Reset Sucessfully') </script> </div>";
	}
		}
		else
		echo"<script>window.alert('Retype Password Not Matched ');</script>";
	}
	else
	echo "<script>window.alert('Existing Password Not Matched');</script>";
}}
 ?>
</div>
 </div>
 <div class="col-md-3"></div>
<?php include 'footer.php'?>