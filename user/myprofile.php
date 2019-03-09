<?php include 'header.php'?>
<?php 
$sql="SELECT * from users where email='$_SESSION[ul]'";
$result=$conn->query($sql);
if($result->num_rows>0)
	$row=$result->fetch_assoc();
	?>
<hr /> <h3 align="center"> User Profile </h3><hr />
<div class="container">
    <div class="row">
<div class="col-md-3">
<img src=<?php echo $row['image'];?> width="100%" height="250px" />
<form action="" method="post"><br/>
<button  type="submit" name="chg" class="btn btn-lg " style="background-color:#90F ; color:#FFFFFF">New Pic</button>
    </form>
<?php 
if(isset($_POST['chg'])){?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" class="form-control" />
<button name="upload" class="btn " style="background-color:#90F ; color:#FFFFFF" type="submit">Upload </button>
    </form>
       
    
<?php }?>
<?php 
if(isset($_POST['upload']))
{
	$target_dir="upload/";
	$target_file=$target_dir.basename($_FILES["image"]["name"]);
	$uploadok=1;
	$imagefiletype=pathinfo($target_file,PATHINFO_EXTENSION);
	if($_FILES["image"]["size"]>50000000000)
	{
		$uploadok=0;
		echo"sorry ,your is too large .";

	}
	if($imagefiletype!="jpg"&&$imagefiletype!="png"&&$imagefiletype!="jpeg"&&$imagefiletype!="JPG"&&$imagefiletype!="PNG"&&$imagefiletype!="JPEG")
	{
		echo"sorry ,only jpg,png,jpeg files are allowed .";
		$uploadok=0;
	}
	if($uploadok==1)
	{
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
		{
		        echo "The File ".basename ($_FILES["image"]["name"])."has been uploaded ";
		}
		else
		{
		echo "sorry ,there is error in uploading file .";
		}
	
	
$sql="update users set image='$target_file' WHERE email='$_SESSION[ul]'";
			if($conn->query($sql)==TRUE)
			{
			       echo"<br> <script>window.location='myprofile.php'; </script>";
			 }
			 else 
			 {
				 echo "<br> <div class='alert alert-danger'>
				 <i class='fa fa-remove'></i> &nbsp; &nbsp; Error".$sql."" .$conn->error."</div>";
			
			 }
			 }}
    ?></div>
 <div class="col-md-9" >
     <h3 align="left"  class="text-capitalize" style=" font-family:'Times New Roman', Times, serif; color:#00C">Name:
         <?php echo $row['username'];?></h3>

        <div class="row"><br/><br/>
    <div class="col-md-5">
        <p style="font-size:18px">Email ID:<?php echo $row['email'];?></p></div>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <div class="col-md-5">
                <p style="font-size:18px">Contact: <?php echo $row['phone'];?> </p></div></div>
      <div class="row">
    <div class="col-md-5">
        <p style="font-size:18px"> Date Of Birth: <?php echo $row['dob'];?> </p></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-5">
        <p style="font-size:18px"> Gender:<?php echo $row['gender'];?></p></div>
     
     </div>
        
        
 <div class="col-md-9" ><br/>
<h3 align="left"  class="text-capitalize" style=" font-family:'Times New Roman', Times, serif; color:#00C"> Address Details:
    </h3>
        <div class="row">
    <div class="col-md-6">
        <p style="font-size:18px">Address :<?php  echo $row ['address'];?> </p></div>
    <div class="col-md-6">
        <p style="font-size:18px"> State : <?php echo $row['state'];?></p></div></div>
    
<div class="row">
    <div class="col-md-6">
        <p style="font-size:18px"> City : <?php echo $row['city'];?> </p></div>
    <div class="col-md-6">
        <p style="font-size:18px">Pincode : <?php echo $row['pincode'];?> </p></div></div>
    <div class="row">
<div class="col-md-6 ">
        <p style="font-size:18px"> Register on: <?php echo $row['regon'];?> </p></div>
     </div>
     <div class="row" align="right">
 <?php  echo "<a href='editprofile.php'> <button class='btn'> Edit Detail </button></a>";?>
     </div></div></div>
            <div class="col-md-1">
</div></div></div>
<?php include 'footer.php'?>