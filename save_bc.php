<?php
$bc_id = $_REQUEST['bc_id'];
$dc_id=$_REQUEST['dc_id'];
$block=$_REQUEST['block'];
$bc_name=$_REQUEST['bc_name'];
$contact_no=$_REQUEST['contact_no'];
$emp_vill=$_REQUEST['emp_vill'];
$emp_po=$_REQUEST['emp_po'];
$emp_block=$_REQUEST['emp_block'];
$emp_dist=$_REQUEST['emp_dist'];
$emp_id=$_REQUEST['emp_id'];
$emp_doj=$_REQUEST['emp_doj'];

include 'conn.php';




$sql = "insert into blockco(bc_id,dc_id,block,contact_no,emp_vill,emp_po,emp_mandal,emp_dist,emp_id,emp_doj) 
 values
 ('$bc_id','$dc_id','$block','$contact_no','$emp_vill','$emp_po','$emp_mandal','$emp_dist','$emp_id','$emp_doj')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
	'bc_id' => $bc_id,
	'dc_id' => $dc_id,
	'block' => $block,
	'bc_name' => $bc_name,
	'contact_no' => $contact_no,
	'emp_vill' => $emp_vill,
	'emp_po' => $emp_po,
	'emp_block' => $emp_block,
	'emp_dist' => $emp_dist,
	'emp_id' => $emp_id,
	'emp_doj' => $emp_doj

));

?>