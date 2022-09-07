<?php
include 'login_check.php';
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
                $nps_id = test_input($_GET["nps_id"]);
                $benf_date = test_input($_GET["benf_date"]);
                $dc_id = test_input($_GET["dc_id"]);
                $block = test_input($_GET["block"]);
                $project = test_input($_GET["project"]);
       
                $month = test_input($_GET["month"]);
                $year=test_input($_GET["year"]);
                $month1=date("F",strtotime($benf_date));
                $year1=date("Y",strtotime($benf_date));
              }
           
    //$m=strtoupper(date("F",$date));
echo '<div class="heading">SUMMARY BY NPS  '.$block.' '.$month.' '.$year.'</div>';
echo '<div class="back">
 <input type="button" value="Back" onclick="history.back(-1)" />
</div>';
echo '<table>';
  echo '<tr>';
   
     echo '<th class="mis">Slno</th>';

   echo '<th class="mis"> Application Date</th>';
    echo '<th class="mis"> Project</th>';
 /* echo '  <th class="mis"> NPS Code</th>';
   echo ' <th class="mis"> District</th>';
  echo '  <th class="mis"> Block</th>';*/
  echo '  <th class="mis">NPS Name</th>';
   echo '  <th class="mis"> Benf Name</th>';
  echo '  <th class="mis"> Benf F/Name</th>';
   echo ' <th class="mis"> Contact No</th>';
  echo '  <th class="mis"> Village</th>';
   echo ' <th class="mis"> Mandal</th>';
 echo '   <th class="mis"> District</th>';
   echo ' <th class="mis"> Pin</th>';
  echo '  </tr>';

 //$where="where benf.project_id= '$project' and distco.district='$district' and blockco.block='$block'";
$where="where benf.project_id like '$project%' 
        and distco.dc_id like'$dc_id%' 
        and blockco.block like'$block%'
        and benf.nps_id like'$nps_id%'  
        and monthname(benf_date) like '$month%' 
        and year(benf_date)  like '$year%'
        and monthname(benf_date) like '$month1%'
        and year(benf_date)  like '$year1%'";

 include 'conn.php';
$query =    "SELECT * ,count(*) as total
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
                 join blockco ON distco.dc_id = blockco.dc_id
                 join areaco ON blockco.bc_id = areaco.bc_id 
                 join benf ON areaco.nps_id = benf.nps_id
                 join projects on benf.project_id=projects.project_title
                 $where 
                  GROUP BY benf_id order by distco.district,blockco.block,areaco.nps_id,benf.benf_date";
 

$result=mysql_query($query, $db) or die(mysql_error($db)); 
$num_rows = mysql_num_rows($result);
$dist=$dc=$blk=$bc=$mndl=$nps=$proj=$proj_nos=$total_proj_nos="";
$slno=0;
while ($row = mysql_fetch_array($result)) {
extract($row);
$slno=$slno+1;


$proj_nos=0;
 $proj_nos=$proj_nos+$total;
 $total_proj_nos=$total_proj_nos+$proj_nos;
  //  <th class="remarks"> Remarks</th>
echo '<tr>';
echo '<td class="benf">' . $slno .'</td>';
echo '<td class="benf">' . $benf_date .'</td>';
echo '<td class="benf">' . $project_title .'</td>';
/*echo '<td class="benf">' . $nps_id .'</td>';
echo '<td class="benf">' . $district .'</td>';
echo '<td class="benf">' . $block .'</td>';*/
echo '<td class="benf">' . $nps_name .'</td>';


echo '<td class="benf">' . $benf_name .'</td>';
echo '<td class="benf">' . $benf_fath_name .'</td>';
echo '<td class="benf">' . $benf_contact_no .'</td>';
echo '<td class="benf">' . $benf_vill .'</td>';
echo '<td class="benf">' . $benf_mandal .'</td>';


echo '<td class="benf">' . $benf_dist .'</td>';
echo '<td class="benf">' . $benf_pin .'</td>';


 

echo '</tr>';
}

echo '</table>';
mysql_close($db);
//echo $where;
// session_start();
// $project=$_SESSION['project'];


?>

