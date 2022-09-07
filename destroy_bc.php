<?php

$id = $_REQUEST['id'];

include 'conn.php';

$sql = "delete from blockco where id='$id'";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>