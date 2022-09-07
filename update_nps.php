<?php
$id = intval($_REQUEST['id']);
$nps_id=$_REQUEST['nps_id'];
$bc_id=$_REQUEST['bc_id'];
$mandal=$_REQUEST['mandal'];
$nps_name=$_REQUEST['nps_name'];
$contact_no=$_REQUEST['contact_no'];
$emp_vill=$_REQUEST['emp_vill'];
$emp_po=$_REQUEST['emp_po'];
$emp_block=$_REQUEST['emp_block'];
$emp_dist=$_REQUEST['emp_dist'];
$emp_id=$_REQUEST['emp_id'];
$emp_doj=$_REQUEST['emp_doj'];




include 'conn.php';

$sql = "update areaco set 

nps_id='$nps_id',
bc_id='$bc_id',
mandal='$mandal',
nps_name='$nps_name', 
contact_no='$contact_no',
emp_vill='$emp_vill',
emp_po='$emp_po',
emp_block='$emp_block',
emp_dist='$emp_dist',
emp_id='$emp_id',
emp_doj='$emp_doj'
where id='$id'";

//$sql = "update areaco set nps_id='$id' where nps_id='$id'";
mysql_query($sql);
echo json_encode(array(
	
	'id' => $id,
	'nps_id' => $nps_id,
	'bc_id' => $bc_id,
  'mandal' => $mandal,
  'nps_name' => $nps_name,
  'contact_no' => $contact_no,
  'emp_vill' => $emp_vill,
  'emp_po' => $emp_po,
  'emp_block' => $emp_block,
  'emp_dist' => $emp_dist,
  'emp_id' => $emp_id,
  'emp_doj' => $emp_doj
	
));
?>
