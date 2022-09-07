<?php
session_start();
$project=$_SESSION['project'];
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css">
<STYLE TYPE="text/css">
</STYLE>
</head>
<body>

<table>
  <tr>
   
    <th class="mis"> District</th>
    <th class="mis"> dc_name</th>
    <th class="mis"> block</th>
    <th class="mis"> bc_name</th>
    <th class="mis"> mandal</th>
    <th class="mis"> nps_name</th>
    <th class="mis"> nps_id</th>
    <th class="mis"> date</th>
    <th class="mis"> nos</th>
  </tr>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<?php

$proj=" and applications.project_id='SWALAMBANA'";
include 'find_with_date.php';
$where="";
$where.=  $diststring ;
$where.=  $proj ;

// Recives input from form.php
$dist=$_POST['selection'];
$dt=$_POST['date'];
$blk=$_POST['selection1'];
//Check for where string
 include 'conn.php';

$query =	"SELECT stateco.name as 'state_head',stateco.sc_id as state,
			distco.district, distco.dc_name, blockco.bc_id, blockco.dc_id,
			blockco.block,blockco.bc_name,areaco.mandal,areaco.nps_name,areaco.nps_id,
			applications.date,applications.nos 
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
    			 join blockco ON distco.dc_id = blockco.dc_id
    			 join areaco ON blockco.bc_id = areaco.bc_id 
    			 join applications ON areaco.nps_id = applications.nps_id
                 join projects ON applications.project_id = projects.project_title
    			 $where
    			 order by dc_id,bc_id,nps_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 
    
// show the results
$total_records=0;
 $tnos =0;
 while ($row = mysql_fetch_array($result)) {
extract($row);

$tnos = $tnos+$nos;
 $total_records=$total_records+1;
 }
include 'dis_heading.php';








//echo '<p style="color:brown;text-align :center;font-size:20px">' . "APPLICATIONS STATEMENT FOR " . $dist ." FOR ".$blk
//. "  ON " . $dt . ". ". " TOTAL NO OF APPLICATIONS  ". $tnos . '</p>';
 $tnos =0;
 
//connect to MySQL 
$result=mysql_query($query, $db) or die(mysql_error($db)); 
while ($row = mysql_fetch_array($result)) {
extract($row);

$tnos = $tnos+$nos;
echo '<tr>';


echo '<td class="benf">' . $district .'</td>';

echo '<td class="benf">' . $dc_name .'</td>';
echo '<td class="benf">' . $block .'</td>';
echo '<td class="benf">' . $bc_name .'</td>';
echo '<td class="benf">' . $mandal .'</td>';
echo '<td class="benf">' . $nps_name .'</td>';
echo '<td class="benf">' . $nps_id .'</td>';
echo '<td class="benf">' . $date .'</td>';
echo '<td class="benf">' . $nos .'</td>';
echo '</tr>';
}
echo '</table>';
mysql_close($db);


?>
</body>
</html>
