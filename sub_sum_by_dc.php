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
//include 'find_body_summary.php';

?>
<?php

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
                }

 if($_SERVER['REQUEST_METHOD'] == "GET") {
      $benf_date =test_input($_GET["benf_date"]);
      $project = test_input($_GET["project"]);
      $dc_id = "";
      $block = "";
      $day = test_input($_GET["day"]);
      $month = test_input($_GET["month"]);
      $year=test_input($_GET["year"]);
    }
    $month1=date("F",strtotime($benf_date));
    $year1=date("Y",strtotime($benf_date));
      $date="";
      $date=$day.'-'.$month.'-'.$year;
      $date=strtotime($date);
    //$m=strtoupper(date("F",$date));
echo '<div class="heading">SUMMARY BY DC '.$benf_date.'</div>';
echo '<div class="sidebar">
 <input type="button" value="Back" onclick="history.back(-1)" />
</div>';
echo '<table>';
  echo '<tr>';
    echo '<th class="mis"> PROJECT</th>';
    echo '<th class="mis"> DISTRICT</th>';
    echo '<th class="mis"> DC NAME</th>';
    echo '<th class="mis" colspan="2"> TOTAL</th>';
    
  echo '</tr>';

 //$where="where benf.project_id= '$project' and distco.district='$district' and blockco.block='$block'";

$where="where benf.project_id like '$project%'
        and distco.dc_id like'$dc_id%' 
        and blockco.block like'$block%' 
        and monthname(benf_date) like '$month1'"; 
       
 include 'conn.php';
$query =    "SELECT * ,count(*) as total
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
                 join blockco ON distco.dc_id = blockco.dc_id
                 join areaco ON blockco.bc_id = areaco.bc_id 
                 join benf ON areaco.nps_id = benf.nps_id
                 join projects on benf.project_id=projects.project_title
                 $where 
                  GROUP BY distco.district order by distco.district,blockco.block,areaco.nps_id,benf.benf_date";
 

$result=mysql_query($query, $db) or die(mysql_error($db)); 
$dist=$dc=$blk=$bc=$mndl=$nps=$proj="";
$proj_nos=0;
while ($row = mysql_fetch_array($result)) {
extract($row);

echo '<tr>';
//counts total no of applications
    $proj_nos=$proj_nos+$total;

if($proj<>$project_title){
echo '<td class="benf">' . $project_title .'</td>';
$proj=$project_title;
}else{
    echo '<td class="benf"></td>';

}
//<a href="find_dis_swalambana.php">SWALAMBANA APPLICATIONS</a>

      //project=$project && block=$block & day=$day&month=$month&year=$year 

if($dist<>$district){
echo '<td class="benf"><a href="sub_sum_by_bc_date.php?benf_date='.$benf_date.'&project='.$project.'&dc_id='.$dc_id.'&block='.$block.'&day='.$day.'&month='.$month.'&year='.$year.'">'.$district.' </a></td>';
$dist=$district;
}else{
    echo '<td class="benf"></td>';
}

if($dc<>$dc_name){
echo '<td class="benf">' . $dc_name .'</td>';
$dc=$dc_name;
}else{
    echo '<td class="benf"></td>';
}

echo '<td class="benf">' . $total .'</td>';
echo '<td class="benf">NOS</td>';


echo '</tr>';
}
echo '<tr>';
echo '<td class="benf" colspan="3">TOTAL</td>';
echo '<td class="benf">'.$proj_nos.'</td>';
echo '<td class="benf">NOS</td>';
echo '</tr>';
echo '</table>';
mysql_close($db);
//echo $where;
// session_start();
// $project=$_SESSION['project'];


?>

