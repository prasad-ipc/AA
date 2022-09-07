<?php
include 'login_check.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css">
<STYLE TYPE="text/css">

</STYLE>
</head>
<body>

<table class="employee">
  <tr>
    <th class="bc">Sl No</th>
    <th class="bc"> Emp ID</th>
    <th class="bc"> DC CODE</th>
    <th class="bc">DC Name</th>
    <th class="bc"> Contact No</th>
    <th class="bc"> District</th>
    <th class="bc"> SC Name</th>
    <th class="bc"> SC ID</th>
    <th class="bc"> State</th>
   </tr>
  
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<?php

// Recives input from form.php
$dist=$_POST['selection'];
//Check for where string


                        if ($dist=='ALL DISTRICTS') {
                        # code...
                            
                            $diststring="";
                            } else {
                            # code...
                            
                            $diststring="where distco.district = '$dist'";
                            }

                
 
//connect to MySQL
include 'conn.php';
$query =  "SELECT 
      distco.district,distco.dc_name,distco.dc_id, distco.emp_id,distco.contact_no,
      distco.emp_doj,stateco.sc_id,stateco.state_name,stateco.name
        
    FROM stateco   JOIN distco ON stateco.sc_id = distco.sc_id 
                        
           $diststring
           order by dc_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 


if ($dist=='ALL DISTRICTS') {
  $dc="DISTRICT CO-ORDINATORS FOR ";
  $dist="ANDHRA PRADESH";
} else {
  $dc="DISTRICT CO-ORDINATOR FOR ";
}
 echo '<div class="heading">'.$dc." ".
  strtoupper($dist) . '</div>';

 $slno =0;
 
while ($row = mysql_fetch_array($result)) {
extract($row);

$slno = $slno+1;

echo '<tr>';
echo '<td class="bc_data">' . $slno .'</td>';
echo '<td class="bc_data">' . $emp_id .'</td>';
echo '<td class="bc_data">' . $dc_id .'</td>';
echo '<td class="bc_data">' . $dc_name .'</td>';
echo '<td class="bc_data">' . $contact_no .'</td>';
echo '<td class="bc_data">' . $district .'</td>';
echo '<td class="bc_data">' . $sc_id .'</td>';
echo '<td class="bc_data">' . $name .'</td>';
echo '<td class="bc_data">' . $state_name .'</td>';

echo '</tr>';

echo '<tr>';
//echo '<td>' . 'Total No Of Apllications =' .'</td>';
}

echo '</table>';
mysql_close($db);


?>

</body>
</html>
