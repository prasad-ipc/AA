<?php
include 'login_check.php';
?>
<?php 
$find_url='sum_by_date.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css">
<STYLE TYPE="text/css">
</STYLE>
</head>
<body>

</body>
</html>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<?php
include 'find_body_summary.php';

?>
<?php

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
                }

$project=$district=$block=$day=$month=$year="";
     

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $project = test_input($_POST["project"]);
      $dc_id = test_input($_POST["district"]);
      $block = test_input($_POST["block"]);
      $day = test_input($_POST["day"]);
      $month = test_input($_POST["month"]);
      $year=test_input($_POST["year"]);
      $date="";
      $date=$day.'-'.$month.'-'.$year;
      $date=strtotime($date);
    //$m=strtoupper(date("F",$date));
echo '<div class="heading">SUMMARY BY DATE</div>';
echo '<div class="sidebar">
 <input type="button" value="Back" onclick="history.back(-1)" />
</div>';
echo '<table>';
  echo '<tr>';
    echo '<th class="mis"> PROJECT</th>';
    echo '<th class="mis"> DATE</th>';
   echo '<th class="mis" colspan="2"> TOTAL</th>';
    
  echo '</tr>';

 //$where="where benf.project_id= '$project' and distco.district='$district' and blockco.block='$block'";

$where="where benf.project_id like '$project%' and distco.dc_id like'$dc_id%' 
        and blockco.block like'$block%' 
        and day(benf_date) like '$day%' 
        and monthname(benf_date) like '$month%' 
        and year(benf_date)  like '$year%'";

 include 'conn.php';
$query =    "SELECT * ,count(*) as total
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
                 join blockco ON distco.dc_id = blockco.dc_id
                 join areaco ON blockco.bc_id = areaco.bc_id 
                 join benf ON areaco.nps_id = benf.nps_id
                 join projects on benf.project_id=projects.project_title
                 $where 
                  GROUP BY benf.benf_date";
 
$result=mysql_query($query, $db) or die(mysql_error($db)); 
$num_rows = mysql_num_rows($result);
$dist=$dc=$blk=$bc=$mndl=$nps=$proj=$proj_nos=$total_proj_nos="";
while ($row = mysql_fetch_array($result)) {
extract($row);

echo '<tr>';


$proj_nos=0;
 $proj_nos=$proj_nos+$total;
 $total_proj_nos=$total_proj_nos+$proj_nos;



if($proj<>$project_title){
echo '<td class="benf">' . $project_title .'</td>';
$proj=$project_title;
}else{
    echo '<td class="benf"></td>';
}


if($date<>$benf_date){
//echo '<td class="benf">' . $benf_date .'</td>';
echo '<td class="benf"><a href="sub_sum_by_dc_with_date.php?benf_date='.$benf_date.'&project='.$project.'&day='.$day.'&month='.$month.'&year='.$year.'">'.$benf_date.' </a></td>';

$dist=$benf_date;
}else{
    echo '<td class="benf"></td>';
}
echo '<td class="benf">' . $total .'</td>';
echo '<td class="benf">NOS</td>';


echo '</tr>';
}
echo '<tr>';
echo '<td class="benf" colspan="2">TOTAL</td>';
echo '<td class="benf">'.$total_proj_nos.'</td>';
echo '<td class="benf">NOS</td>';
echo '</tr>';
echo '</table>';
mysql_close($db);
//echo $where;
// session_start();
// $project=$_SESSION['project'];
}

?>

