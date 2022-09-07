<?php

$id = $_REQUEST['id'];

include 'conn.php';

$sql = "delete from areaco where id='$id'";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>