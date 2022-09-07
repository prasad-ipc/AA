<?php

$benf_date=$_REQUEST['benf_date'];
$project_id=$_REQUEST['project_id'];
$nps_id=$_REQUEST['nps_id'];
$benf_name=$_REQUEST['benf_name'];
$benf_f_name=$_REQUEST['benf_f_name'];
$contact_no=$_REQUEST['contact_no'];
$benf_vill=$_REQUEST['benf_vill'];
$benf_mandal=$_REQUEST['benf_mandal'];
$benf_dist=$_REQUEST['benf_dist'];
$benf_pincode=$_REQUEST['benf_pincode'];
$Remarks=$_REQUEST['Remarks'];


//if(isset($_POST['submit1'])){

$db = mysql_connect('localhost', 'hostgodi_ganesh', 'vinayaka21') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('hostgodi_NPS', $db) or die(mysql_error($db));

$query = "INSERT INTO benf (benf_date, project_id, nps_id,benf_name,benf_fath_name,
   
  benf_contact_no,benf_vill,benf_mandal,benf_dist,benf_pin,benf_remarks)
VALUES ('$benf_date', '$project_id', '$nps_id', '$benf_name', '$benf_f_name',
  '$contact_no', '$benf_vill', '$benf_mandal', '$benf_dist', '$benf_pincode', '$Remarks')"; 
      
$result=mysql_query($query) or die(" insert error :".mysql_error());

if($result) {

          header("Location: datavalidate.php");

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
