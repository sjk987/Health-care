<!DOCTYPE html>
<html lang="en">
<title>Yoga</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-green" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
    <a href="#benefits" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Benefits</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-green w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Diet</h1>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
  <img src="image/appetizer-bowls-breakfast-1640770.jpg" height="200px" ;width="100%">
      <h1><a name="about">What is Proper Diet?</a></h1>
      
      <p class="w3-text-grey">Diet can also refer to the food and drink a person consumes daily and the mental and physical circumstances connected to eating. Nutrition involves more than simply eating a “good” diet—it is about nourishment on every level. It involves relationships with family, friends, nature (the environment), our bodies, our community, and the world.</p>
</p>
<img src="image/apple-basket-buy-1260305.jpg" height="200px"; width="30%">

      <h1><a name="about">How Does Diet Impact On Health ?</a></h1>
<p class="w3-text-grey">
Eating too much or too little
</p>
<p class="w3-text-grey">
According to the National Eating Disorders Association, in the United States alone, 20 million women and 10 million men have suffered from an eating disorder at some time in their lives. These disorders are significant threats to health and are often chronic.
</p><p class="w3-text-grey">
The average age of sufferers is plummeting, claiming control of children as young as elementary school. Peak eating disorder onset among girls occurs between ages 11 and 13. Eating disorders are also appearing more frequently among men and middle-aged women.
</p>
    </div>

    <div class="w3-third w3-center">
    </div>
  </div>
</div>

<!-- Second Grid -->
  <div class="w3-content">
    <div class="w3-third w3-center">
    </div>
      <h1 ><a name="benefits">Proper Diet Benefits</h1>
      <p class="w3-text-grey">What Are The Proper Diet Health Benefits?

<p class="w3-text-grey">Eating a diet rich in vegetables and fruits as part of an overall healthy diet may reduce risk for heart disease, including heart attack and stroke.</p>
<p class="w3-text-grey">
Eating a diet rich in some vegetables and fruits as part of an overall healthy diet may protect against certain types of cancers.
Diets rich in foods containing fiber, such as some vegetables and fruits, may reduce the risk of heart disease, obesity, and type 2 diabetes.</p><p class="w3-text-grey">
Eating vegetables and fruits rich in potassium as part of an overall healthy diet may lower blood pressure, and may also reduce the risk of developing kidney stones and help to decrease bone loss.</p><p class="w3-text-grey">
Eating foods such as vegetables that are lower in calories per cup instead of some other higher-calorie food may be useful in helping to lower calorie intake.   </p> </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="index.php" target="_blank">Health Care</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
