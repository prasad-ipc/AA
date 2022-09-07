<?php
include 'login_check.php';
$find_url='sum_by_month.php';
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
include 'find_body_summary_wo_dc_bc.php';
?>
<?php

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
                }

$project=$district=$block=$day=$month=$year="";
     
 if($_SERVER['REQUEST_METHOD'] == "POST") {
      $project = test_input($_POST["project"]);
      $month = test_input($_POST["month"]);
      $year=test_input($_POST["year"]);
         

echo '<div class="heading">SUMMARY BY MONTH</div>';
echo '<div class="sidebar">
      <input type="button" value="Back" onclick="history.back(-1)" />
      </div>';
echo '<table>';
echo '<tr>';
echo '<th class="mis"> PROJECT</th>';
echo '<th class="mis"> MONTH</th>';
echo '<th class="mis" colspan="2"> TOTAL</th>';
echo '</tr>';

 //$where="where benf.project_id= '$project' and distco.district='$district' and blockco.block='$block'";

$where="where benf.project_id like '$project%' 
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
                  GROUP BY month(benf_date) order by year(benf_date),month(benf_date)";
 
$result=mysql_query($query, $db) or die(mysql_error($db)); 
$num_rows = mysql_num_rows($result);
$dist=$dc=$blk=$bc=$mndl=$nps=$proj=$proj_nos="";
$total_proj_nos=0;
while ($row = mysql_fetch_array($result)) {
extract($row);

echo '<tr>';


 $total_proj_nos=$total_proj_nos+$total;



if($proj<>$project_title){
echo '<td class="benf">' . $project_title .'</td>';
$proj=$project_title;
}else{
    echo '<td class="benf"></td>';
}

  echo '<td class="benf"><a href="sub_sum_by_dc_month.php?benf_date='.$benf_date.'&project='.$project.'&dc_id='.$dc_id.'&block='.$block.'&day='.$day.'&month='.$month.'&year='.$year.'">'.date("F",strtotime($benf_date)).' '.date("Y",strtotime($benf_date)).' </a></td>';

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

