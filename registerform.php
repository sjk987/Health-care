<?php include 'header1.php' ?>
<?php include 'db.php' ?>
<div class="row" style=" background-image:url(image/board-bread-breakfast-349610.jpg); background-size:cover;background-repeat:no-repeat;"> 
<div class="col-md-1"> </div>
<div class="col-md-4" style="padding-top:60px; padding-bottom:60px">

<form  action="" method="post" style=" border-radius:5px" >
<h3 align="center" style="font-family:Quikhand; color:#333; font-size:60px;">Register Here</h3><br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> First Name </h4>
<input type="text" name="ns" placeholder="First Name"  pattern="[a-zA-Z]{3,40}" class="form-control"  required="required"/><br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif;color:#00C" >Email Address </h4>
<input type="email" name="id" placeholder="Email"   class="form-control" required="required"/><br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Password </h4>
<input type="password" name="password" placeholder="Password" title="Minimum 8 charcters that should include upper case,lower case,special characters,numbers." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" class="form-control" required="required"  /><br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Confirm Password </h4>
<input type="password" name="cpassword" placeholder="Confirm password"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"  class="form-control"  required="required"/><br/>

<button type="submit" name="Save"  placeholder="PC" class="btn btn-lg btn-info">Register </button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Are you a member? <a href="userlogin.php">Log In </a> </button>
</form>
<?php 
if(isset($_POST['Save']))
{	
	$sql="SELECT * from users WHERE email='$_POST[id]';";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	echo "Already Resgister";
		else 
		{
			if ($_POST['password']=$_POST['cpassword'])
			{
				$dp='upload/default.png';
			
		
	$sql="INSERT INTO users(username,email,password,regon,image) values('$_POST[ns]','$_POST[id]','$_POST[password]','$dt','$dp');";
	if($conn->query($sql)===TRUE){
		$nm=$_POST['ns'];
		require 'PHPMailer-master/PHPMailerAutoload.php';
$email = "kj42855@gmail.com";
$password = "sweetuandcars";
$to_id = $_POST['id'];
$subject ="Thank You";
$message = "Hiiii".$nm;
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else 
       {
echo "<div class ='alert alert-success' style='padding:2px;'>Message has been sent </div>";
        }

		echo"<br/><script>alert('New Record Created Suceessfully') </script> </div>";
}
else
         {
		echo"Error:".$sql."<br>".$conn->error;
         }}
		 else
		 
			 echo"Retype Password Not Matched ";
		 
}}
?>
</div></div>
 <?php include 'footer.php' ?>