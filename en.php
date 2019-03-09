<?php include 'header1.php'?>
<div class="row">
    <div class="col-md-12 bg-dark text-white text-center pt-3 pb-3">
<h3 align="center">Encrypt/Decrypt</h3>
</div></div>

<div class="container-fluid">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="" method="post"><br />
<label style="font-size:20px"> <b>Type Text here :  (Max char 1000 only )</b></label>
<textarea rows=6  name="text" class="form-control" required maxlength="1000"></textarea> 
<label style="font-size:20px"> <b> Enter your Key (Key For encrypion / decryption )</b></label>
<input type="text" name="key" class="form-control" required/>
<br/>
<button type="submit" name="enc" class="btn btn-lg btn-info">Encrypt </button> 
<button type="submit" name="dec"class="btn btn-lg btn-info">Decrypt </button>
<button type="reset" name="rest" class="btn btn-lg btn-danger">Clear </button>
</form>
<?php
if(isset($_POST['enc']))
{
$string=$_POST['text'];
$key=$_POST['key'];
$rtext = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
}
else if(isset($_POST['dec']))
{
$string=$_POST['text'];
$key=$_POST['key'];
$rtext = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}
else
$rtext='';
?>


<br/>
<h3><b> Result : </b></h3>
<textarea rows=6  name="text" class="form-control" > <?php echo $rtext; ?> </textarea> 
<br/>


</div>

</div></div>
<div class="col-md-3"></div>
</div>
</div>

<?php include 'footer.php'?>