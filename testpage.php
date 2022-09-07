


<HTML>

<head>
<link rel="stylesheet" href="css/base.css"> 
<style type="text/css">
body{
    background-image: url("images/pattern.gif");
}
form{
    width: 300px;
     margin-left: 150px;
     color: blue;
}
form select{
    color: blue;
    width: 200px;
}

form input{
    width: 200px;
color: blue;
font-weight: bold;
}

h2{
    height: 80px;
   margin-bottom: 10px;
   margin-top: -2px;
}
</style>

</head>
<body>

<?php include 'header.php'; ?>
<?php include 'menu.php';?>


    <h1> SELECT A DISTRICT </h1>
  <select id ="dist">
    <option value="ALL DIST">ALL DISTRICTS</option>
<?php

    $db = mysql_connect('localhost', 'root', '') or 
   die ('Unable to connect. Check your connection parameters.');
    //make sure our recently created database is the active one
    mysql_select_db('NPS', $db) or die(mysql_error($db));

    $query =  "SELECT * FROM distco";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 

while ($row = mysql_fetch_array($result)) {
extract($row);
//echo $bc_id.'<br>';
//echo '<option value=' . $bc_id . '>'. $block . '</option>';
//echo '<option value="$bc_id">"$block"</option>';
echo '<SCRIPT LANGUAGE="javascript">';
echo 'var x = document.createElement("OPTION");';
 echo '   x.setAttribute("value", "'.$district.'");';
  echo '  var t = document.createTextNode("'.$district.'");';
 echo '   x.appendChild(t);';
 echo '   document.getElementById("dist").appendChild(x);';
echo '// --></SCRIPT>';
}
echo '</selct>';

echo '<br>';

?>

</body>
</HTML>
