<!DOCTYPE html>
<html>
<body>

<h2>JavaScript</h2>

<p>JavaScript evaluates expressions from left to right. Different sequences can produce different results:</p>

<p id="demo"></p>

<script>
var x = 15 + 10 + "mark!";
document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>