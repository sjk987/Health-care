<script src="../editor/ckeditor.js"></script> 
<?php include 'header.php'?>
<div class="row">
<div class="col-md-2" ></div>
<div class="col-md-8" > <br/>
<form action="" method="post">
    <hr /> <h3 align="center"> Review </h3><hr/>
<input type="text" name="sub" placeholder="Subject" class="form-control" /><br/>
<textarea name="editor" id="editor" placeholder="Message" rows="4" class="form-control" > </textarea><br/>
<button type="submit" name="Save" class="btn btn-block btn-success" > Send </button>
</form>
<?php 
if(isset($_POST['Save'])){
		$text=addslashes($_POST['editor']);
	$sql="INSERT INTO review(subject,message,reviewon,reviewby) values( '$_POST[sub]','$text','$dt','$_SESSION[ul]');";
	if($conn->query($sql)===TRUE){
		echo"<br/><div class='alert alert-succes'> <script >alert('Thank You') </script> </div>";
	}else{
		echo"Error:".$sql."<br>".$conn->error;
	}}
?>

</div></div>
 <div class="col-md-2"></div>
 <script> CKEDITOR.replace( 'editor' );  </script>
<?php include 'footer.php'?>