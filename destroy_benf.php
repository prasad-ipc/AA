<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from benf where benf_id=$id";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>