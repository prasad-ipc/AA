<?php
$id = intval($_REQUEST['benf_id']);
$benf_date=$_REQUEST['benf_date'];
$project_id=$_REQUEST['project_id'];
$nps_id=$_REQUEST['nps_id'];
$benf_name=$_REQUEST['benf_name'];
$benf_fath_name=$_REQUEST['benf_fath_name'];
$benf_contact_no=$_REQUEST['benf_contact_no'];
$benf_vill=$_REQUEST['benf_vill'];
$benf_mandal=$_REQUEST['benf_mandal'];
$benf_dist=$_REQUEST['benf_dist'];
$benf_pin=$_REQUEST['benf_pin'];
$benf_remarks=$_REQUEST['benf_remarks'];

include 'conn.php';

$sql = "update benf set 
benf_date='$benf_date',
project_id='$project_id',
nps_id='$nps_id',
benf_name='$benf_name', 
benf_fath_name='$benf_fath_name',
benf_contact_no='$benf_contact_no',
benf_vill='$benf_vill',
benf_mandal='$benf_mandal',
benf_dist='$benf_dist',
benf_pin='$benf_pin',
benf_remarks='$benf_remarks'
 where benf_id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
	'benf_date' => $benf_date,
	'project_id' => $project_id,
	'nps_id' => $nps_id,
	'benf_name' => $benf_name,
	'benf_fath_name' => $benf_fath_name,
	'benf_contact_no' => $benf_contact_no,
	'benf_vill' => $benf_vill,
	'benf_mandal' => $benf_mandal,
	'benf_dist' => $benf_dist,
	'benf_pin' => $benf_pin,
	'benf_remarks' => $benf_remarks
));
?>
<html>
<head></head>
<body>
sdasdsdasd
</body>