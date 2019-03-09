<?php include 'header1.php' ?> 
<div class="row">
<div class="col-md-4"> </div>
<div  align="center" >
<form id="pass"name="" method="post" style="padding-top:90px; padding-bottom:90px" >
<h3 align="center">  
<h4> Enter Your Email Address For Reset Passcode </h4> <br/>
<div class="input-group" > 
<span class="input-group-addon" >
<i class="fa fa-envelope" > </i>
</span>
<input type="email" name="email" placeholder="Enter Email Address"  class="form-control" /></div> <br/>
<h4 ><input type="submit" name="Save" placeholder="PC" class="btn btn-block btn-danger"  /></h4>
</div>
</form>
<?php 
if(isset($_POST['Save']))
{
	$code=rand(1000,9999);
	$_SESSION['code']=$code;
	$eid=$_POST['email'];
require '../PHPMailer-master/PHPMailerAutoload.php';
$email = 'kdjas1234@gmail.com';
$password = 'phonecall';
$to_id = $_POST['email'];
$message = "<p><a href=http://localhost:8080/web/user/recover.php?id=$eid>click Here</a> to recover your password and verfiy code is </p> ".$code."<p> <b> Regards </b></p><p> Care India </p>";
$subject =" Recover Password";
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
}
?>
</div>
</div>
<div class="col-md-4"></div>
<?php include 'footer.php' ?>