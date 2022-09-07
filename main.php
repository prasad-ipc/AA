<html>
<head>
	<link rel="stylesheet" href="css/base.css">
<style>


body{
	background-image: url("images/pattern.gif");
}
table {
	width: 100%;
	
}
table, th, td {
    border: 1px solid black;
    text-align: center;
    color: Blue;
}

.state {
	width: 40px;
	padding: 2px;
	color: red;
}
.district {
	width: 100px;
	padding: 2px;
	color: red;
}
.dc_id {
	width: 100px;
	padding: 2px;
	color: red;
}
.dc_name {
	width: 100px;
	padding: 2px;
	color: red;
}
.block {
	width: 100px;
	padding: 2px;
	color: red;
}
.bc_name {
	width: 100px;
	padding: 2px;
	color: red;
}
.mandal {
	width: 100px;
	padding: 2px;
	color: red;
}
.nps_name {
	width: 100px;
	padding: 2px;
	color: red;
}
.nps_id {
	width: 100px;
	padding: 2px;
	color: red;
}
.date {
	width: 30px;
	padding: 2px;
	color: red;
}
.nos {
	width: 30px;
	padding: 2px;
	color: red;
}

</style>
</head>
<body>

<table>
  <tr>
    <th class="statehead">State Head</th>
    <th class="state"> State</th>
    <th class="district"> District</th>
  	<th class="dc_id"> dc_id</th>
    <th class="dc_name"> dc_name</th>
    <th class="block"> block</th>
    <th class="bc_name"> bc_name</th>
    <th class="mandal"> mandal</th>
    <th class="nps_name"> nps_name</th>
    <th class="nps_id"> nps_id</th>
    <th class="date"> date</th>
    <th class="nos"> nos</th>
  </tr>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<?php
// Recives input from form.php
$selvalue=$_POST['selection'];
$date=$_POST['date'];
//Check for where string
if ($selvalue=='ALL DIST') {
	# code...
	echo "condition TRUE" . $selvalue;
	$diststring="where applications.date='$date'";
} else {
	# code...
	echo "condition FALSE" . $selvalue;
	$diststring="where distco.dc_id = '$selvalue' AND applications.date='$date'";
}



//connect to MySQL
$db = mysql_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('NPS', $db) or die(mysql_error($db));

$query =	"SELECT stateco.name as 'state_head',stateco.sc_id as state,
			distco.district, distco.dc_name, blockco.bc_id, blockco.dc_id,
			blockco.block,blockco.bc_name,areaco.mandal,areaco.nps_name,areaco.nps_id,
			applications.date,applications.nos 
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
    			 join blockco ON distco.dc_id = blockco.dc_id
    			 join areaco ON blockco.bc_id = areaco.bc_id 
    			 join applications ON areaco.nps_id = applications.nps_id
    			 $diststring 
    			 order by bc_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 
    
// show the results

 $tnos =0;
 
while ($row = mysql_fetch_array($result)) {
extract($row);

$tnos = $tnos+$nos;
echo '<tr>';
echo '<td>' . $state_head .'</td>';
echo '<td>' . $state .'</td>';
echo '<td>' . $district .'</td>';
echo '<td>' . $dc_id .'</td>';
echo '<td>' . $dc_name .'</td>';
echo '<td>' . $block .'</td>';
echo '<td>' . $bc_name .'</td>';
echo '<td>' . $mandal .'</td>';
echo '<td>' . $nps_name .'</td>';
echo '<td>' . $nps_id .'</td>';
echo '<td>' . $date .'</td>';
echo '<td>' . $nos .'</td>';
echo '</tr>';
}
echo '<tr>';
echo '<td>' . 'Total No Of Apllications =' .'</td>';
echo '<td>' . $tnos .'</td>';

echo '</table>';
mysql_close($db);
echo "Success";

?>

</body>
</html>
