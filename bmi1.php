<!DOCTYPE html>
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


	</style>
             
        <script type="text/javascript">
          
            function computeBMI() {
                // user inputs
                var height = Number(document.getElementById("height").value);
                var heightunits = document.getElementById("heightunits").value;
                var weight = Number(document.getElementById("weight").value);
                var weightunits = document.getElementById("weightunits").value;
     
                //Perform calculation
        
                //        var BMI = weight /Math.pow(height, 2)*10000;
                var BMI = weight / Math.pow(height/100, 2);
        
                //Display result of calculation
                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;
        
                var output = Math.round(BMI * 100) / 100
                if (output < 18.5)
                    document.getElementById("comment").innerText = "You are Underweight. You should eat more frequently.When you're underweight, you may feel full faster. Eat five to six smaller meals during the day rather than two or three large meals.";
                else if (output >= 18.5 && output <= 25)
                    document.getElementById("comment").innerText = "You are Normal. Keep it up. You are healthy.";
                else if (output > 25)
                    document.getElementById("comment").innerText = "You are Overweight. You can do aerobic exercises. Doing aerobic exercise (cardio) is an excellent way to burn calories and improve your physical and mental health. It appears to be particularly effective for losing belly fat, the unhealthy fat that tends to build up around your organs and cause metabolic disease.";
                // document.getElementById("answer").value = output; 
            }
        </script>
         </head>
         <body>


<h1>Body Mass Index Calculator</h1>

        <p>Enter your height in centimetres: <input type="text" id="height"/>
            <option type="text" id="heightunits"> 
            </option>
             </p>
        <p>Enter your weight in kilograms: <input type="text" id="weight"/>
            <option type="text" id="weightunits"> 
            </option>
        </p>
        <input type="submit" value="computeBMI" onclick="computeBMI();">
        <h1>Your BMI is: <span id="output">?</span></h1>
        
        <h2>This means: <span id="comment"> ?</span> </h2> 


         </body>
        
        </html>