<html>
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
<div class="loginform">
    
<form method="post"  action="temp_mis.php">
	<P style="color:blue;text-align :left;font-size:24px">Select a District</p>



<?php
include 'conn.php';
    $query =  "SELECT * FROM distco";

    $result=mysql_query($query, $db) or die(mysql_error($db)); 


echo '<select  name="selection" >';











//echo get_options();
echo '<option value="ALL DISTRICTS">ALL DISTRICTS</option>';
while ($row = mysql_fetch_array($result)) {
extract($row);
echo '<option value=' . $dc_id . '>'. $district . '</option>';
}
echo '</select>';
//mysql_close($db)



  






    echo'<P style="color:blue;text-align :left;font-size:24px">Select a Block</p>';
    echo'<select  name="selection1">';

    echo'   <br><br>';
    echo'<option value="ALL BLOCKS">ALL BLOCKS</option>';
include 'conn.php';
     $query =  "SELECT * FROM blockco  ";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 
    while ($row = mysql_fetch_array($result)) {
    extract($row);
    echo '<option value=' . $bc_id . '>'. $block . '</option>';
}

?>

</select>

<br><br>
<P style="color:blue;text-align :left;font-size:24px">Enter a Date. </P>
<P style="color:blue;text-align :left;font-size:22px">(YYYY-MM-DD)</P>
<input type="date" name="date" >
<br><br>
<input type="submit" value="Submit">








<?php
function getBlock($dist){
 include 'conn.php';

    $query =    "SELECT 
            distco.district, distco.dc_name, distco.dc_id,blockco.bc_id, blockco.dc_id,
            blockco.block,blockco.bc_name 
    FROM distco join blockco ON distco.dc_id = blockco.dc_id
                 where distco.dc_id = $dist
                 order by bc_id";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 
    while ($row = mysql_fetch_array($result)) {
    extract($row);

   echo '<option value=' . $bc_id . '>'. $block . '</option>';

    echo 'adsasdasasasdas';
        }
}
?>


</form>

</div>

</body>
</html>
