<?php
//connect to MySQL
$db = mysql_connect('localhost', 'hostgodi_ganesh', 'vinayaka21') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('hostgodi_NPS', $db) or die(mysql_error($db));
?>