<?php include 'header1.php' ?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <TITLE>BMI CACULATOR</TITLE>
    </head>
    <style>
    body,html {
    color: black;
    display:table-cell;
    width:100%;
    margin:0;
    padding:0;
}
form {
    background-color:080A5C9;
    display:inline-block;
    box-sizing: border-box;
    box-shadow: 3px 3px 20px 5px black;
    margin: 0;
    padding: 15px;
    width:100%;
    max-width: 400px;
}
input {
    box-shadow: 1px 1px 3px 1px black;
    width: 100%;
    text-align: center;
}

.submit {
    display:inline-block;
    color: white;
    background-color: blue;
    margin:0;
    padding: 5px;
    border: 5px;
    font-weight: bold;
    width:100%;
}
.submit:hover {
    color: blue;
    background-color: white;
    font-size: 0.7em;
    font-weight: bold;
}
#result {
    border: 1px solid black;
    padding: 2px;
    color: white;
    width: 100%;
    text-align: center;
}

h4 {
    color: black;
    text-shadow: -2px -2px 5px white;
    
}
    </style>

    <script>
  function calculateBmi() {
  var weight = document.bmiForm.weight.value
  var height = document.bmiForm.height.value
  if(weight > 0 && height > 0){	
  var finalBmi = weight/(height/100*height/100)
  document.bmiForm.bmi.value = finalBmi
  if(finalBmi < 18.5){
  document.bmiForm.meaning.value = "That you are underweight." 
   }
   if(finalBmi > 18.5 && finalBmi < 25){
   document.bmiForm.meaning.value = "That you are healthy."
    }
   if(finalBmi > 25){
    document.bmiForm.meaning.value = "That you have overweight."
    }
    }
   else{
    alert("Please Fill in everything correctly")
    } 
    }
	
</script>
    <body>
    <div class="row">
<div class="col-md-12 bg-dark text-white text-center pt-3 pb-3">
    <h3 align="center"> Body Mass Calculator </h3>
    <div class="container" style="height:400px; width:100%">
          <form name="bmiForm" >
          Your Weight(kg): <input type="text" name="weight" size="10"><br />
          Your Height(cm): <input type="text" name="height" size="10"><br />
             <input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
             Your BMI: <input type="text" name="bmi" size="10"><br />
             This Means: <input type="text" name="meaning" size="25"><br />
            <input type="reset" value="Reset" />
          </form>
</div></div></div>
<?php include 'footer.php' ?>