<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Text Color Change Example</title>
</head>
<body>
<p id="text">Change me</p><br>
<?php
//$value = "\"text\""; // Works, escapes the double quotes
$value = '"text"'; // Works, another way to write the statement
//$value = "text"; // Does not work
echo "<button onclick='myFunction($value)'>Click me</button>";
?>
<script>
function myFunction(parameter){
element = document.getElementById(parameter);
element.style.color = 'blue';
}
</script>
</body>
</html>