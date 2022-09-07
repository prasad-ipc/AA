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
                $benf_date = test_input($_GET["benf_date"]);
                $dc_id = test_input($_GET["dc_id"]);
                $block = test_input($_GET["block"]);
                $project = test_input($_GET["project"]);
                $day = test_input($_GET["day"]);
                $month = test_input($_GET["month"]);
                $year=test_input($_GET["year"]);
              }
                $date="";
                $date=$day.'-'.$month.'-'.$year;
                $date=strtotime($date);
    //$m=strtoupper(date("F",$date));
echo '<div class="heading">SUMMARY BY NPS  '.$block.' '.$day.' '.$month.' '.$year.'</div>';
echo '<div class="back">
 <input type="button" value="Back" onclick="history.back(-1)" />
</div>';
echo '<table>';
  echo '<tr>';
    echo '<th class="mis"> PROJECT</th>';
    echo '<th class="mis"> DISTRICT</th>';
    echo '<th class="mis"> DC NAME</th>';
    echo '<th class="mis"> BLOCK</th>';
    echo '<th class="mis"> BC NAME</th>';
    echo '<th class="mis"> MANDAL</th>';
    echo '<th class="mis"> NPS NAME</th>';
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
                  GROUP BY areaco.nps_id order by distco.district,blockco.block,areaco.nps_id,benf.benf_date";
 

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


if($dist<>$district){
echo '<td class="benf">' . $district .'</td>';
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
if($blk<>$block){
echo '<td class="benf">' . $block .'</td>';
$blk=$block;
}else{
    echo '<td class="benf"></td>';
}   

if($bc<>$bc_name){
echo '<td class="benf">' . $bc_name .'</td>';
$bc=$bc_name;
}else{
    echo '<td class="benf"></td>';
}   


if($mndl<>$mandal){
echo '<td class="benf">' . $mandal .'</td>';
$mndl=$mandal;
}else{
    echo '<td class="benf"></td>';
}   

if($nps<>$nps_name){
echo '<td class="benf">' . $nps_name .'</td>';
$nps=$nps_name;
}else{
    echo '<td class="benf"></td>';
}   
    
echo '<td class="benf"><a href="sub_sum_by_benf.php?nps_id='.$nps_id.'&benf_date='.$benf_date.'&project='.$project.'&dc_id='.$dc_id.'&block='.$block.'&day='.$day.'&month='.$month.'&year='.$year.'">'.$total.' </a></td>';
echo '<td class="benf">NOS</td>';
 

echo '</tr>';
}
echo '<tr>';
echo '<td class="benf" colspan="7">TOTAL</td>';
echo '<td class="benf">'.$total_proj_nos.'</td>';
echo '<td class="benf">NOS</td>';
echo '</tr>';
echo '</table>';
mysql_close($db);
//echo $where;
// session_start();
// $project=$_SESSION['project'];


?>

