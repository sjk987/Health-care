<?php include'header1.php'?>
<?php include'db.php'?>
<html >
    <HEAD>
    <title>DAILY EXERCISES</title>
    <body>
<div class="card" style="margin:40px; padding:90px">
      <h1 align="center">Set Goals Of The Day</h1><br /> 
 <div class="row">
 <div class="col-md-4"></div>
 <div class="col-md-4">
 <form  method="post">
                <input type="text"  name="set" placeholder="Enter Some text" />
                <input type='submit' name="save" id='search_button' value="Submit"  />
      </form>
      <?php
	  if(isset($_POST['save']))
{
    $sql="INSERT INTO sets(setgoals)values('$_POST[set]');";
	if($conn->query($sql)===TRUE)
	{
		echo"<br/> <script> alert('Added Successfully') </script> </div>";
	}
	else
	{
		echo"Error:".$sql."<br/>".$conn->error;
	}
}
?>
</div>
      </div> </div>
      <p id='output'></p>
            <ul id='output_ul'></ul>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="result" id="mydiv"></div>
    </div>
</div>
    
  </body>
        
        <script>
            function doSearch() {
                var output_list = []; 
                var input = document.getElementById('text_box').value;
                output_list.push(input);
                
                for (var i = 0; i < output_list.length; ++i) {
                    console.log(output_list[i]);
                    document.getElementById('output_ul').innerHTML += '<input type=checkbox value='+i+' >' + output_list[i]+'<br>';
                }
            }

        </script>
 <div class="row" style="margin:60px">
 <div class="col-md-4"></div>
 <div class="col-md-4">
<?php
echo"<b>"."My Goal of the Day"."</b>"."<br>";
$i=1;
$sql="SELECT * FROM sets";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		
		$sid=$row['setgoals'];       // sid is variable

echo "<td>".$row['setgoals']."</td>"."<br>";
}
}
?>
    
</div></div>
<div class="col-md-4"></div>
<?php include'footer.php' ?>