<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<h2>Registration</h2>
<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["email"].value;
  if (x == "" && y == "") {
    alert("Name & Email must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<form name="myForm" action="log.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="fname">
  <br><br>
  Email:<input type="text" name="email">
  <br><br>
  Password :<input type="password" name="password">
  <br><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>