<!DOCTYPE html>
<html>
<head>
	<title> Lab Task 3</title>
</head>
<body>

	<?php include 'navbar.php'; 

		$nameErr = $passErr = "";
		$name = $pass = "";

		//name validation
		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			$name = $_POST['name'];
		
					if (empty($name)) {
				    $nameErr = "Name can't be empty";
			}

		//pass validation
		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			$pass = $_POST['pass'];
			
			if (empty($pass)) {
				    $passErr = "pass can't be empty";
			}
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
		 <legend> Login</legend>
		 	<label> Username:</label> &nbsp; 
		 	<input type="text" name="name" id="name" /> 
		 	<span class="error">* <?php echo $nameErr;?></span> 
		 	<br> <br>
		 	<label>Paasword: </label> &nbsp; 
		 	<input type="text" name="pass" id="pass" /><br>
		 	<span class="error">* <?php echo $passErr;?></span> <br>
		 	 <hr>
		 	<input type="checkbox" name="" value="">Remember Me <br> 
		 	<input type="submit" name="submit" value="submit">
		 	<a href="forgot.php"> Forgot Password? </a>



		</fieldset>
	</form>

	<?php

	     echo $name;
		 echo "<br>";
		 echo $pass;

	 ?>

	 <?php include 'footer.php' ?>


</body>
</html>