<?php
include 'login_check.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css"> 
<style type="text/css">
</style>

</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<?php
echo '<div class="find_body">';
echo '<div class="find_select">';
echo '<form method="post"  action="dc.php">';
echo '<table class ="find">';
echo '<tr>';

echo '<td><p>Select a District</p></td>';
echo '</tr>';
    include 'conn.php';
    $query =  "SELECT * FROM distco order by distco.district";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 
echo '<td><select  name="selection" >';

echo '<option value="ALL DISTRICTS">ALL DISTRICTS</option>';
    while ($row = mysql_fetch_array($result)) {
    extract($row);
echo '<option value=' . '"'.$district.'"' . '>'. strtoupper($district) . '</option>';
}
echo '</select></td>';
echo '</tr>';
echo '<tr>';
echo '<td><input type="submit" value="Submit">';
echo '</tr>';
echo '</form>';
echo '</div>';
echo '</div>';
?>
</body>
</html>
