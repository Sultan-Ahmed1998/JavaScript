<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Objects</h2>

<p id="demo"></p>
<p id="demo1"></p>
<p id="demo2"></p>

<script>
// Create an object:
var car = {type:"Fiat", model:"500", color:"white"};

// Display some data from the object:
document.getElementById("demo").innerHTML = "The car type is " + car.type;
document.getElementById("demo1").innerHTML = "The car model is " + car.model;
document.getElementById("demo2").innerHTML = "The car color is " + car.color;

</script>

</body>
</html>