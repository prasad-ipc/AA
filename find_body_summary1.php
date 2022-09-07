<?php
// find
echo '<div class="sum-find">';
echo '<div class="sum_find_select">';
echo '<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">'; 

//echo '<form method="post"  action="">';
echo '<table class ="find">';
echo '<tr>';
echo '<td>PROJECT</td>';
echo '<td>DISTRICT</td>';
echo '<td>BLOCK</td>';
echo '<td>DAY</td>';
echo '<td>MONTH</td>';
echo '<td>YEAR</td>';
echo '</tr>';

    include 'conn.php';
    $query =  "SELECT * FROM distco order by distco.district";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 

echo '<tr>';
echo '<td><select  name="project" >';
//echo '<option value=""></option>';
echo '<option value="SWALAMBANA">SWALAMBANA</option>';
echo '<option value="AAM ADMI">AAM ADMI</option>';
echo '<option value="E-INSURANCE">E-INSURANCE</option>';
echo '</select></td>';




echo '<td><select  name="district" >';
echo '<option value="">ALL DISTRICTS</option>';
    while ($row = mysql_fetch_array($result)) {
    extract($row);
echo '<option value=' . '"'.$district.'"' . '>'. strtoupper($district) . '</option>';
}
echo '</select></td>';


    include 'conn.php';
    $query =  "SELECT * FROM blockco order by blockco.block";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 

echo '<td><select  name="block" >';
echo '<option value="">ALL BLOCKS</option>';
    while ($row = mysql_fetch_array($result)) {
    extract($row);
echo '<option value=' . '"'.$block.'"' . '>'. strtoupper($block) . '</option>';
}
echo '</select></td>';





echo '<td><select  name="day" >';
echo '<option value=""></option>';
$day=1;
$d=0;

    while ($day <= 31) {
        if(strlen($day)<2){$d='0'.$day;}else{$d=$day;}

echo '<option value=' . '"'.$day.'"' . '>'. $d . '</option>';

$day=$day+1;
}
echo '</select></td>';



echo '<td><select  name="month" >';
echo '<option value=""></option>';
$month=0;
$m=array('January', 'February', 'March', 'April', 'May' ,'June', 'July', 'August', 'September', 'October' ,'November', 'December');
    while ($month <= 11) {
        

echo '<option value=' . '"'.$m[$month].'"' . '>'. $m[$month] . '</option>';

$month=$month+1;
}
echo '</select></td>';





echo '<td><select  name="year" >';
echo '<option value=""></option>';
$year=2014;

    while ($year <= 2030) {
        

echo '<option value=' . '"'.$year.'"' . '>'. $year . '</option>';

$year=$year+1;
}
echo '</select></td>';


echo '<td><input type="submit" value="FIND"></td>';
echo '</tr>';
echo '</table>';
echo '</form>';
echo '</div>';
echo '</div>';
$project=$district=$block=$day=$month=$year="";
//echo $query;
?>