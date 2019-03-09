<?php include 'header.php' ?>

<hr /> <h3 align="center"> Update Your Profile Info </h3><hr />


<?php
$sql="SELECT * FROM users";
$result=$conn->query($sql);
if($result->num_rows>0)
	$row=$result->fetch_assoc();
		$sid=$row['userid']; 
		?>               
        

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<form action="" method="post">

    <div class="row">
        <div class="col-md-6">
            <p style="font-size:20px"> Name</p>
            <input type="text" class="form-control" value="<?php echo $row['username'] ?> " name="un"  /></div>
  <div class="col-md-6">
<p style="font-size:20px"> Phone </p>
            <input type="text" class="form-control" value="<?php echo $row['phone'] ?> " name="phn"/></div>
       </div>
    <div class="row">
      
        <div class="col-md-6">
<p style="font-size:20px"> Date Of Birth </p>
            <input type="text" class="form-control" value="<?php echo $row['dob']?>"name="dob" /></div>
<div class="col-md-6">
<p style="font-size:20px"> Gender </p>
            <input type="text" class="form-control" value="<?php echo $row['gender']?>"   name="gender"></div>
  </div>
    <div class="row">
        <div class="col-md-12">
<p style="font-size:20px"> Address </p>
            <textarea  rows="5" class="form-control" type="text" value="<?php echo $row['address']?>" name="add" ></textarea></div></div>
        <div class="row">
        
        <div class="col-md-6">
<p style="font-size:20px"> Country</p>
            <input type="text"  class="form-control"value="<?php echo $row['country'] ?> " name="country"  /></div>
<div class="col-md-6">
<p style="font-size:20px"> State </p>
            <input type="text"  class="form-control"value="<?php echo $row['state'] ?> " name="state"  /></div></div>
        <div class="row">
        
        <div class="col-md-6">
<p style="font-size:20px"> City</p>
            <input type="text"class="form-control" value="<?php echo $row['city'] ?> " name="city" placeholder="Title" /></div>

        <div class="col-md-6">
<p style="font-size:20px"> Pincode</p>
            <input type="text" class="form-control" value="<?php echo $row['pincode'] ?> " name="pincde" placeholder="Title" /></div></div>
       
            
            <div class="row">
        <div class="col-md-12">
<p style="font-size:20px"> About:- </p>
            <textarea value="<?php echo $row['about'] ?>" name="about" rows="5" class="form-control"  placeholder="Short Bio" ></textarea></div></div><br/>
<button type="buttom"  name="Save"  class="btn btn-primary btn-l" dusk="nav-subscribe" >Update</button>
</form>

<?php
if(isset($_POST['Save']))
{
			$sql="update username set users='$_POST[un]',phone ='$_POST[phn]',email='$_POST[email]',gender ='$_POST[gender]',address ='$_POST[add]',state='$_POST[state]',about='$_POST[about]',city ='$_POST[city]'WHERE userid='$_GET[id]';";
			if($conn->query($sql)==TRUE)
			{
			echo"error:".$sql."<br/>".$conn->error;
			} 
}

?>

</div></div>
<?php include'footer.php'?>