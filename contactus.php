<?php include 'header1.php' ?>
<?php include 'db.php' ?>
<div class=" container-fluid">
<div class="row" >
<img src="image/balance-cobblestone-conceptual-279470.jpg"  height="500px"  width="100%" /></div></div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6">
<form action="" method="post" class="p-4"><br />
<h1 align="center" style="font-family:Quikhand;">Contact Us</h1>
<div class="row">
<div class="col-md-6">
    <h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> First Name</h4>
 <input type="text" name="ns" placeholder="First name" class="form-control" required /></div>
<div class="col-md-6">
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Email ID</h4>
<input type="email" name="id" placeholder="Email"   class="form-control" required/>  </div></div><br/>
<div class="row">
<div class="col-md-6">
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Contact </h4>
<input type="number" name="no" placeholder="Contact" class="form-control" required/>  </div>
<div class="col-md-6">
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Address </h4>
<input type="text" name="add" placeholder="Address"   class="form-control" required/> </div></div><br/>
<h4 align="left" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Any Enquiry :</h4>
<textarea name="msg" placeholder="Message" rows="5" cols="60 "class="form-control" required></textarea> 
<br/>
<input type="submit" name="Save" placeholder="PC" class="btn btn-lg btn-danger"  /><br/><br/>
    </form>
    
<?php 
if(isset($_POST['Save'])){
	$sql="INSERT INTO enquiry(username,phone,email,message,address,enquiryon) values('$_POST[ns]','$_POST[no]','$_POST[id]','$_POST[msg]','$_POST[add]','$dt');";
	if($conn->query($sql)===TRUE){
		require 'PHPMailer-master/PHPMailerAutoload.php';
$email = '';
$password = '';
$to_id = '';
$subject ='';
$message = '';
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
else {
echo "<div class ='alert alert-success' style='padding:2px;'>Message has been sent </div>";
}

		echo"<br/><script >alert('New Enquiry Successfully') </script> </div>";
	}else{
		echo"Error:".$sql."<br>".$conn->error;
	}}
?></div>
<div class="col-md-4 p-5" align="center"><br />
<h2 style="font-family:Quikhand; font-size:30px"> Follow Us: </h2>

<div class="fa fa-facebook" style="font-size:25px; margin-3px; "> fb:webFitness </div><br>
        <div class="fa fa-instagram" style="font-size:25px;" > instagram:web_Fitness </div><br />
    <div class="fa fa-twitter-square" style="font-size:25px; "> twitter:web_Fitness</div>
    <hr/><hr/>
    
    <h2 style="font-family:Quikhand; font-size:30px"> Contact Us: </h2>
<div class="fa fa-phone-square" style="font-size:25px"> (880) 1726903999</div>
<br />
    <div class="fa fa-envelope" style="font-size:25px"> info@healthcare.com</div><br/>
        <div class="fa fa-address" style="font-size:25px"> Amritsar</div>
    </div></div><br><br/>
<?php include'footer.php'?>