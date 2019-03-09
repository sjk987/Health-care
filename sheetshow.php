<?php include 'header1.php'?>



<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
<?php 
$sql="SELECT * FROM cheatsheet";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		$sid=$row['sheetid'];
	
        ?></div>
                <div class="row" style="border-bottom:medium solid #000; padding:10px">

<div class="col-md-2">
<img src="image/images.jpg" height="150px" width="95%" />
    <p align="center"><?php echo "<a href='admin/".$row['image']."' download>Download File</a>"?></p></div>

<div class="col-md-8">
<h3><?php echo $row['title'] ?>
</h3>
    <p><?php echo $row['desp'] ?></p>
                    </div>
<?php }} ?>
    </div></div><br/><br/>

<?php include 'footer.php' ?>