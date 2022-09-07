<?php
include 'login_check.php';
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css">
<STYLE TYPE="text/css">
.mis_heading {
  position: static;
text-align: center;
font-size: 25px;
color: #FFF;
background-color:#4D0202;
padding: 12px 0PX 10PX 0PX;
margin-top: =12px;  
 }

</STYLE>
</head>
<body>

<table class="employee">
  <tr>
    <th class="bc">Sl No</th>
    <th class="bc"> Emp ID</th>
    <th class="bc"> BC CODE</th>
    <th class="bc">BC Name</th>
    <th class="bc"> Contact No</th>
    <th class="bc"> Block</th>
    <th class="bc"> DC Name</th>
    <th class="bc"> DC ID</th>
    <th class="bc"> District</th>
    <th class="bc"> State</th>
  </tr>
  
  

<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<?php

// Recives input from form.php
$dist=$_POST['selection'];
$blk=$_POST['selection1'];
//Check for where string

//if(!$dt){
                if ( $blk== 'ALL BLOCKS') {

                        if ($dist=='ALL DISTRICTS') {
                        # code...
                            
                            $diststring="";
                            } else {
                            # code...
                            
                            $diststring="where distco.district = '$dist'";
                            }

                 } else {

                            if ($dist=='ALL DISTRICTS')  {
                                # code...
                                $diststring="where blockco.block= '$blk'";
                                
                            } else {
                                 $diststring="where distco.district = '$dist' AND blockco.block= '$blk'";
                                    }  

                }


//connect to MySQL
include 'conn.php';
$query =  "SELECT 
      distco.district,distco.dc_name,distco.dc_id, blockco.block,blockco.bc_name,
      blockco.bc_id,blockco.emp_id,blockco.contact_no,
      blockco.emp_doj,stateco.sc_id,stateco.state_name,stateco.name
        
    FROM stateco   JOIN distco ON stateco.sc_id = distco.sc_id 
            JOIN  blockco ON distco.dc_id = blockco.dc_id
            
           $diststring
           order by dc_id,bc_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 


if ($dist=='ALL DISTRICTS') {
  $bc="BLOCK CO-ORDINATORS FOR ";
  $dist="ANDHRA PRADESH STATE";
} else {
  $bc="BLOCK CO-ORDINATORS FOR ";
  $dist= $dist." DISTRICT";
}
 
if ($blk=='ALL BLOCKS') {
  echo '<div class="heading">'.$bc." ".
  strtoupper($dist) . '</div>';

} else {
  $bc="BLOCK CO-ORDINATOR FOR ";
  echo '<div class="heading">'.$bc." ".
  strtoupper($blk) .' BLOCK' .'</div>';

}
 
 $slno =0;
 
while ($row = mysql_fetch_array($result)) {
extract($row);

$slno = $slno+1;

   //  <th class="bc_name"> bc_name</th>
   // <th class="dc_name"> dc_name</th>
  //  <th class="remarks"> Remarks</th>

echo '<tr>';
echo '<td class="bc_data">' . $slno .'</td>';
echo '<td class="bc_data">' . $emp_id .'</td>';
echo '<td class="bc_data">' . $bc_id .'</td>';
echo '<td class="bc_data">' . $bc_name .'</td>';
echo '<td class="bc_data">' . $contact_no .'</td>';
echo '<td class="bc_data">' . $block .'</td>';
echo '<td class="bc_data">' . $dc_name .'</td>';
echo '<td class="bc_data">' . $dc_id .'</td>';
echo '<td class="bc_data">' . $district .'</td>';
echo '<td class="bc_data">' . $sc_id .'</td>';

echo '</tr>';

echo '<tr>';
//echo '<td>' . 'Total No Of Apllications =' .'</td>';
}

echo '</table>';
mysql_close($db);


?>

</body>
</html>
