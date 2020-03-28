<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Variables</h2>

<p>Strings are written with quotes.</p>
<p>Numbers are written without quotes.</p>

<p id="demo"></p>

<script>
var pi = 3.14;
var person = "Sultan Ahmed";
var question = 'What is your name?';

document.getElementById("demo").innerHTML = pi + "<br>" + question + "<br>" + person;
</script>

</body>
</html>