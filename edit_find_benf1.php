<html>
<head>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/find.css"> 
<style type="text/css">
</style>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="loginform">
<form method="post"  action="edit_benf.php" target="_blank">
<P style="color:blue;text-align :left;font-size:24px">Select a District</p>

<?php
include 'conn.php';
$query =  "SELECT * FROM distco order by distco.district";

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
     $query =  "SELECT * FROM blockco order by blockco.block ";
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







</form>

</div>

</body>
</html>
