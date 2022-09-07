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

<?php include 'header.php'; ?>
<?php include 'menu.php';?>


<table>
  <tr>
    <th class="nps">Sl No</th>
    <th class="nps"> Emp ID</th>
    <th class="nps"> NPS CODE</th>
    <th class="nps">NPS Name</th>
    <th class="nps"> Contact No</th>
    <th class="nps"> Block</th>
    <th class="nps"> BC_Name</th>
    <th class="nps"> BC_ID</th>
    <th class="nps"> District</th>
    <th class="nps"> DC Name</th>
  </tr>
  
  
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

/*}else{

            if ( $blk== 'ALL BLOCKS') {

                    if ($dist=='ALL DISTRICTS') {
                    # code...
                        
                        $diststring="where areaco.emp_doj='$dt'";
                        } else {
                        # code...
                        
                        $diststring="where distco.dc_id = '$dist' AND areaco.emp_doj='$dt'";
                        }

             } else {

                        if ($dist=='ALL DISTRICTS')  {
                            # code...
                            $diststring="where blockco.bc_id= '$blk' AND areaco.emp_doj='$dt'";
                            
                        } else {
                             $diststring="where distco.dc_id = '$dist' AND blockco.bc_id= '$blk' AND areaco.emp_doj='$dt'";
                                }  

            }
}
*/

//connect to MySQL
include 'conn.php';
$query =	"SELECT 
			distco.district,distco.dc_name,distco.dc_id, blockco.block,blockco.bc_name,
      blockco.bc_id,areaco.nps_name,areaco.emp_id,areaco.contact_no,
      areaco.nps_id,areaco.emp_id,areaco.emp_doj,stateco.sc_id as state
		    
    FROM stateco   JOIN distco ON stateco.sc_id = distco.sc_id 
            JOIN  blockco ON distco.dc_id = blockco.dc_id
            JOIN  areaco ON blockco.bc_id = areaco.bc_id 
           $diststring
    			 order by dc_id,bc_id,nps_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 

 
if ($dist=='ALL DISTRICTS') {
  $nps="NPS FOR ";
  $dist="ANDHRA PRADESH STATE";
} else {
  $nps="NPS FOR ";
  $dist= $dist." DISTRICT";
}
 
if ($blk=='ALL BLOCKS') {
  echo '<div class="heading">'.$nps." ".
  strtoupper($dist) . '</div>';

} else {
  echo '<div class="heading">'.$nps." ".
  strtoupper($blk) .' BLOCK' .'</div>';

}
 

 $slno =0;
 
while ($row = mysql_fetch_array($result)) {
extract($row);

$slno = $slno+1;

echo '<tr>';
echo '<td class="benf">' . $slno .'</td>';
echo '<td class="benf">' . $emp_id .'</td>';
echo '<td class="benf">' . $nps_id .'</td>';
echo '<td class="benf">' . $nps_name .'</td>';
echo '<td class="benf">' . $contact_no .'</td>';
echo '<td class="benf">' . $block .'</td>';
echo '<td class="benf">' . $bc_name .'</td>';
echo '<td class="benf">' . $bc_id .'</td>';
echo '<td class="benf">' . $district .'</td>';
echo '<td class="benf">' . $dc_name .'</td>';
echo '</tr>';
}
echo '</table>';
mysql_close($db);
?>

</body>
</html>
