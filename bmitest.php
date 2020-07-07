
        <html>
           <head>

        <title>BMI Calculator</title>
	<style>

	body{
  		font-family: arial, sans-serif;
  		border-collapse: collapse;
  		width: 45%;
		text-align:justify;
		background-color: #fbfdfb;
		color: #1e1f26;
		margin: 5% auto;
    		padding: 0;

		}

	hr{	border: 1px solid #1e1f26;
		}

	h1,h2{	text-align:center; 
		background-color: #b3cde0;
		}
		
	.error {color: #FF0000;}


	</style>


<?php	
// define variables and set to empty values
$heightErr = $weightErr = "";
$height = $weight = $bmi = $output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["height"])) {
    $heightErr = "Height is required";
  } else {
    $height = test_input($_POST["height"]);
  }
  
  if (empty($_POST["weight"])) {
    $weightErr = "weight is required";
  } else {
    $weight = test_input($_POST["weight"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
	if (!isset($_POST['submit']))
	{
	?>



<h2>BODY MASS INDEX CALCULATOR</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
  ENTER YOUR HEIGHT IN CENTIMETERS: <input type="text" name="height">
  <span class="error">* <?php echo $heightErr;?></span>
  <br><br>
  ENTER YOUR WEIGHT IN KILOGRAMS: <input type="text" name="weight">
  <span class="error">* <?php echo $weightErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>
	
<?php
	}
else {
if ($_POST['submit']) { 
$weight = $_POST["weight"];
$height = $_POST["height"];
}

?>


<?php
echo "<h2>Your BMI is:</h2>";
echo "Height: $height";
echo "<br>";
echo "Weight: $weight";
echo "<br>";


function getBMI($height,$weight){
$height=$height/100;
$bmi = $weight / ($height*$height);

if ($bmi==0 ) {
    $output = "SUBMIT HEIGHT AND WEIGHT";
	
  } else if ($bmi >=1 AND $bmi<= 18.5) {
    $output = "UNDERWEIGHT<br><h2>This means:<h2><p>You are Underweight. You should eat more frequently.When you're underweight, you may feel full faster. Eat five to six smaller meals during the day rather than two or three large meals.(>_<)";

  } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $output = "NORMAL WEIGHT<br><h2>This means:<h2><p>You are Normal. Keep it up. You are healthy.\(^_^)/";

  } else if ($bmi > 24.9 AND $bmi<=29.9) {
    $output = "OVERWEIGHT<br>
	You are Overweight.<br><h2>This means:<h2><p> You can do aerobic exercises. Doing aerobic exercise (cardio) is an excellent way to burn calories and improve your physical and mental health. It appears to be particularly effective for losing belly fat, 
	the unhealthy fat that tends to build up around your organs and cause metabolic disease.//(0_0)\\";

  } else if ($bmi > 30.0) {
    $output = "OBESE<br><h2>This means:<h2><p>The best way to treat obesity is to eat a healthy, reduced-calorie diet and exercise regularly. To do this, you should: eat a balanced, calorie-controlled diet as recommended by your GP or 
	weight loss management health professional (such as a dietitian) join a local weight loss group.//(T_T)";
  }
  
  return $output;
  
}

echo 'Result: '.getBMI($height,$weight);
echo "<br>";
?>

<?php
unset($height,$weight);
}
?>


         </body>
        
        </html>