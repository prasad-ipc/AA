<?php

//connect to MySQL
 $db = mysql_connect('localhost', 'root', '') or 
   die ('Unable to connect. Check your connection parameters.');
    //make sure our recently created database is the active one
    mysql_select_db('NPS', $db) or die(mysql_error($db));
?>