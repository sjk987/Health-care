<?php include 'header.php' ?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<hr /><h3 align="center"> My Questions</h3><hr />
<table class="table table-responsive table-striped table-light">
<tr class="bg-dark text-light">
<th>Message</th>
<th> Message On</th>
<th> Reply</th>
<th> Reply On</th>
</tr>
<?php 
$sql="SELECT * FROM helpnsupport , reply where reply.quesid=helpnsupport.questionid";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		$sid=$row['questionid'];
		echo "<tr>";
		echo "<td>".$row['message']."</td>";
		echo "<td>".$row['messageon']."</td>";
		echo "<td>".$row['reply']."</td>";
		echo "<td>".$row['replyon']."</td>";
                                    echo"</tr>";

	}
	}

?>
</table>
</div></div>

<div class="col-md-1"></div>

<?php include 'footer.php'?>