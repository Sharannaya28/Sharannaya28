<!DOCTYPE HTML>
<html> 
	<head>

	</head>

	<body>
		
        	<?php

        	$nameErr = $emailErr =  $dateErr = $genderErr = $degreeErr = $bloodErr = "";


        	if ($_SERVER["REQUEST_METHOD"] == "POST")
			 {
					if (empty($_POST["name"])) {
				    $nameErr = "Name is required";
			} else {
				    $name = test_input($_POST["name"]);
				  }
						 

			if (empty($_POST["email"])) 
			{
			   $emailErr = "Email is required";
					  } 
			  else {
					    $email = test_input($_POST["email"]);
					  }



			if (empty($_POST["date"])) 
			{
			   $dateErr = "date is required";
					  } 
			  else {
					    $date = test_input($_POST["dd"]);
					    $date = test_input($_POST["mm"]);
					    $date = test_input($_POST["yy"]);
					  }


					 ;
					  $gender = test_input($_POST["gender"]);
					  $degree = test_input($_POST["degree"]);
					  $blood = test_input($_POST["blood"]);
	
					}

			function test_input($data)
			 {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}









        	?>

        <p><span class="error">* required field</span></p>
     	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

           <fieldset>

	     		<label > Name </label><br>
	     		<input type="text" name="name" id="name" />
				<span class="error">* <?php echo $nameErr;?></span> <br>

	     		<label> Email</label><br>
	     		<input type="email" name="email" id="email" />
	     		<span class="error">* <?php echo $emailErr;?></span>
	     		<br>
	     		<label> Date Of Birth</label> <br>
	     		<input type="text" name="dd" id="dd"  size="1" maxlength="3" />/
	     		<input type="text" name="mm" id="mm" size="1" maxlength="3" />/
	     		<input type="text" name="yy" id="yy" size="1" maxlength="3" />(dd/mm/yy)
	     		<span class="error">* <?php echo $dateErr;?></span> <br>

	     		<br>
	     		<label> Gender</label> <br>
	     		<input type="radio" name="gender"> Male </input> 
	     		<input type="radio" name="gender"> Female </input>
	     		<input type="radio" name="gender"> Others </input>
	     		<br>
	     		<label> Degree</label> <br> 
	     		<input type="Checkbox" name="degree"> SSC </input>
	     		<input type="Checkbox" name="degree"> HSC </input>
				<input type="Checkbox" name="degree"> BSC </input>
				<input type="Checkbox" name="degree"> MSC </input>
				<br>
	     		<label> Blood group</label>
	     		<select name="blood">
						    <option>A Positive</option>
						    <option>A Negative</option>
						    <option>B Positive</option>
						    <option>B Negative</option>
						    <option>AB Positive</option>
						    <option>AB Negative</option>
						    <option>O Positive</option>
						    <option>O Negative</option>
			   </select>


			   <br> <br> 


			   <input type="submit" name="submit" placeholder="Submit"/>

         </fieldset>
     		
     

     	</form>

     				<?php
						
						echo $name;
						echo "<br>";
						echo $email;
						echo "<br>";
						echo $date;
						echo "<br>";
						echo $gender;
						echo "<br>";
						echo $degree;
						echo "<br>";
						echo $blood;

					?>



	</body>








</html>