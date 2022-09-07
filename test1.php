<?php

$name=$_REQUEST['name'];
$nos=$_REQUEST['nos'];



//if(isset($_POST['submit1'])){

$db = mysql_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('NPS', $db) or die(mysql_error($db));

$query = "INSERT INTO tets (name, nos)
VALUES ('$name', '$nos')"; 
      
$result=mysql_query($query) or die(" insert error :".mysql_error());

if($result) {

          header("Location: test.php");

}else{ echo "Not Successful"; }
//}

 //     if (mysql_query($query, $db)) {
  //       echo "New record created successfully";
          
   //      mysql_close($db);
//exit;
 //     }else {
 //         echo "Error: " . $query . "<br>" . mysql_error($db);
  //        echo "FAIL - New record not entered successfully";
  //    }

//}

mysql_close($db);
exit;
?>
