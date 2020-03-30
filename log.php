<?php
	session_start();
	$_SESSION["name"] =$_POST["fname"]
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<h2>Log in</h2>
</head>
<body>

	<form  method="post" action="action.php">
		<b>Email :</b>
		<input type="text" name="email"/><br><br>
				
			
		<b>Password :</b>
		<input type="password" name="password"/><br><br>
				
			
			
		<input type="submit" value="Submit" />
				
		
		
	</form>
	

	
</body>
</html>