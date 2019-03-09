<script src="../editor/ckeditor.js"></script> 
<?php include 'header.php'?>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8"><br/>

<hr /> <h3 align="center"> Ask The Question </h3><hr />
<form action="" method="post">
<input type="text" name="msg" placeholder="Subject" class="form-control" > <br/>
<textarea name="editor" id="editor" rows="8" placeholder="Ask Anything" > </textarea> <br/>
<button type="submit" name="Save" class="btn btn-lg btn-success"> Send </button>
</form>
<?php 
if(isset($_POST['Save']))
{		
     $text=addslashes($_POST['editor']);
	$sql="INSERT INTO helpnsupport(subject,message,messageon,helpby) values( '$_POST[msg]','$text','$dt','$_SESSION[ul]');";
	if($conn->query($sql)===TRUE){
		echo"<br/><script >alert('Thank You') </script> </div>";
	}else{
		echo"Error:".$sql."<br>".$conn->error;
	}
	}
?>
</div></div>
 <div class="col-md-2"></div>
 <script> CKEDITOR.replace( 'editor' );</script>
<?php include 'footer.php'?>