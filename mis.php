<html>
<head>
<link rel="stylesheet" href="css/base.css">
<STYLE TYPE="text/css">
.mis_heading {
	position: static;
text-align: center;
font-size: 25px;
color: #FFF;
background-color:#4D0202;
padding: 12px 0PX 10PX 0PX;
margin-top: =12px; 	
 }

</STYLE>
</head>
<body>

<table>
  <tr>
    <th class="mis">SL</th>
  	<th class="mis"> Application Date</th>
    <th class="mis"> Project</th>
    <th class="mis"> State</th>
    <th class="mis"> District</th>
    <th class="mis"> Block</th>
    <th class="mis">NPS Name</th>
    <th class="mis"> Emp ID</th>
    <th class="mis"> Benf Name</th>
  	<th class="mis"> Benf F/Name</th>
  	<th class="mis"> Contact No</th>
   	<th class="mis"> Village</th>
  	<th class="mis"> Mandal</th>
  	<th class="mis"> District</th>
  	<th class="mis"> Pin</th>
    <th class="mis"> BC_Name</th>
    <th class="mis"> DC Name</th>
    <th class="mis"> Remarks</th>

<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="mis_heading"> MONTHLY INFORMATION STATEMENT
	</div>
<?php
// Recives input from form.php
//$selvalue=$_POST['selection'];
//$date=$_POST['date'];

//connect to MySQL
$db = mysql_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('NPS', $db) or die(mysql_error($db));

$query =	"SELECT 
			distco.district, blockco.block,areaco.nps_name,areaco.emp_id,benf.project_id,benf.benf_date,benf.benf_name,
			 benf.benf_fath_name,benf.benf_vill,benf.benf_mandal,benf.benf_dist,benf.benf_pin,
			 blockco.bc_name,distco.dc_name,benf.benf_remarks,stateco.sc_id as state,benf.benf_contact_no,Projects.project_title
			
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
    			 join blockco ON distco.dc_id = blockco.dc_id
    			 join areaco ON blockco.bc_id = areaco.bc_id 
    			 join benf ON areaco.nps_id = benf.nps_id
    			 join projects on benf.project_id=projects.project_title
    			 order by bc_name";

$result=mysql_query($query, $db) or die(mysql_error($db)); 
    
// show the results

 $slno =0;
 
while ($row = mysql_fetch_array($result)) {
extract($row);

$slno = $slno+1;

 

  //  <th class="bc_name"> bc_name</th>
   // <th class="dc_name"> dc_name</th>
  //  <th class="remarks"> Remarks</th>
echo '<tr>';
echo '<td class="benf">' . $slno .'</td>';
echo '<td class="benf">' . $benf_date .'</td>';
echo '<td class="benf">' . $project_title .'</td>';
echo '<td class="benf">' . $state .'</td>';
echo '<td class="benf">' . $district .'</td>';
echo '<td class="benf">' . $block .'</td>';
echo '<td class="benf">' . $nps_name .'</td>';
echo '<td class="benf">' . $emp_id .'</td>';


echo '<td class="benf">' . $benf_name .'</td>';
echo '<td class="benf">' . $benf_fath_name .'</td>';
echo '<td class="benf">' . $benf_contact_no .'</td>';
echo '<td class="benf">' . $benf_vill .'</td>';
echo '<td class="benf">' . $benf_mandal .'</td>';


echo '<td class="benf">' . $benf_dist .'</td>';
echo '<td class="benf">' . $benf_pin .'</td>';

echo '<td class="benf">' . $bc_name .'</td>';
echo '<td class="benf">' . $dc_name .'</td>';
echo '<td class="benf">' . $benf_remarks .'</td>';
echo '</tr>';

echo '<tr>';
//echo '<td>' . 'Total No Of Apllications =' .'</td>';
}

echo '</table>';
mysql_close($db);


?>

</body>
</html>
