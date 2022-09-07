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
th.mis{
	width: 30px;
	padding: 2px;
	color: #FFF;
	background-color: #4B088A;
}
body{
	
	background-color:grey;
	color:white;
}
</STYLE>
</head>
<body>

<table>
  <tr>
    <th class="mis">SL</th>
  	<th class="mis"> Application Date</th>
    <th class="mis"> Project</th>
    <th class="mis"> NPS Code</th>
    <th class="mis"> District</th>
    <th class="mis"> Block</th>
    <th class="mis">NPS Name</th>
    <th class="mis"> Emp ID</th>
    <th class="mis"> Benf Name</th>
  	<th class="mis"> Benf F/Name</th>
  	<th class="mis"> Contact No</th>
   	<th class="mis"> Village</th>
  	<th class="mis"> Mandal</th>
  	<th class="mis"> District</th>
  	<th class="mis"> Pin</th>
    <th class="mis"> BC_Name</th>
    <th class="mis"> DC Name</th>
    <th class="mis"> Remarks</th>

<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="mis_heading"> MONTHLY INFORMATION STATEMENT
	</div>
<?php

// Recives input from form.php
$dist=$_POST['selection'];
$dt=$_POST['date'];
$blk=$_POST['selection1'];
//Check for where string

if(!$dt){
                if ( $blk== 'ALL BLOCKS') {

                        if ($dist=='ALL DISTRICTS') {
                        # code...
                            
                            $diststring="";
                            } else {
                            # code...
                            
                            $diststring="where distco.dc_id = '$dist'";
                            }

                 } else {

                            if ($dist=='ALL DISTRICTS')  {
                                # code...
                                $diststring="where blockco.bc_id= '$blk'";
                                
                            } else {
                                 $diststring="where distco.dc_id = '$dist' AND blockco.bc_id= '$blk'";
                                    }  

                }

}else{

            if ( $blk== 'ALL BLOCKS') {

                    if ($dist=='ALL DISTRICTS') {
                    # code...
                        
                        $diststring="where benf_date='$dt'";
                        } else {
                        # code...
                        
                        $diststring="where distco.dc_id = '$dist' AND benf_date='$dt'";
                        }

             } else {

                        if ($dist=='ALL DISTRICTS')  {
                            # code...
                            $diststring="where blockco.bc_id= '$blk' AND benf_date='$dt'";
                            
                        } else {
                             $diststring="where distco.dc_id = '$dist' AND blockco.bc_id= '$blk' AND benf_date='$dt'";
                                }  

            }
}


//connect to MySQL
include 'conn.php';
$query =	"SELECT 
			distco.district, blockco.block,areaco.nps_name,areaco.emp_id,benf.project_id,benf.benf_date,benf.benf_name,
			 benf.benf_fath_name,benf.benf_vill,benf.benf_mandal,benf.benf_dist,benf.benf_pin,
			 blockco.bc_name,distco.dc_name,benf.benf_remarks,benf.nps_id,stateco.sc_id as state,benf.benf_contact_no,projects.project_title
			
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
    			 join blockco ON distco.dc_id = blockco.dc_id
    			 join areaco ON blockco.bc_id = areaco.bc_id 
    			 join benf ON areaco.nps_id = benf.nps_id
    			 join projects on benf.project_id=projects.project_title
           $diststring
    			 order by blockco.dc_id,blockco.bc_id,benf.nps_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 
    
// show the results




if(!$dt){
                if ( $blk== 'ALL BLOCKS') {

                        if ($dist=='ALL DISTRICTS') {
                        # code...
                            
                            echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " . $dist ." FOR ".$blk . "  TILL DATE ".   ' </p>';
                            } else {
                            # code...
                            
                           // $diststring="where distco.dc_id = '$dist'";
                                echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " . $dist ."  TILL DATE " . '
                             </p>';
                            }

                 } else {

                            if ($dist=='ALL DISTRICTS')  {
                                # code...
                                //$diststring="where blockco.bc_id= '$blk'";
                                echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " .$blk . "  TILL DATE " . '
                             </p>';
                                
                            } else {
                                // $diststring="where distco.dc_id = '$dist' AND blockco.bc_id= '$blk'";
                                    echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " . $dist ." FOR ".$blk . "  TILL DATE " . '
                             </p>';
                                    }  

                }

}else{

            if ( $blk== 'ALL BLOCKS') {

                    if ($dist=='ALL DISTRICTS') {
                    # code...
                        
                        //$diststring="where applications.date='$dt'";
                        echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " . $dist ." FOR ".$blk . "  FOR DATE " . $dt.'
                             </p>';
                        } else {
                        # code...
                        
                        //$diststring="where distco.dc_id = '$dist' AND applications.date='$dt'";
                            echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " . $dist ."  FOR DATE " . $dt.'
                             </p>';
                        }

             } else {

                        if ($dist=='ALL DISTRICTS')  {
                            # code...
                           // $diststring="where blockco.bc_id= '$blk' AND applications.date='$dt'";
                            echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " .$blk . "  FOR DATE " . $dt.'
                             </p>';
                        } else {
                             //$diststring="where distco.dc_id = '$dist' AND blockco.bc_id= '$blk' AND applications.date='$dt'";
                                echo '<p style="color:brown;text-align :center;font-size:20px">' .
                            "FOR " . $dist ." FOR ".$blk . "  FOR DATE " . $dt.'
                             </p>';
                                }  

            }
}














 $slno =0;
 
while ($row = mysql_fetch_array($result)) {
extract($row);

$slno = $slno+1;

   //  <th class="bc_name"> bc_name</th>
   // <th class="dc_name"> dc_name</th>
  //  <th class="remarks"> Remarks</th>
echo '<tr>';
echo '<td class="benf">' . $slno .'</td>';
echo '<td class="benf">' . $benf_date .'</td>';
echo '<td class="benf">' . $project_title .'</td>';
echo '<td class="benf">' . $nps_id .'</td>';
echo '<td class="benf">' . $district .'</td>';
echo '<td class="benf">' . $block .'</td>';
echo '<td class="benf">' . $nps_name .'</td>';
echo '<td class="benf">' . $emp_id .'</td>';


echo '<td class="benf">' . $benf_name .'</td>';
echo '<td class="benf">' . $benf_fath_name .'</td>';
echo '<td class="benf">' . $benf_contact_no .'</td>';
echo '<td class="benf">' . $benf_vill .'</td>';
echo '<td class="benf">' . $benf_mandal .'</td>';


echo '<td class="benf">' . $benf_dist .'</td>';
echo '<td class="benf">' . $benf_pin .'</td>';

echo '<td class="benf">' . $bc_name .'</td>';
echo '<td class="benf">' . $dc_name .'</td>';
echo '<td class="benf">' . $benf_remarks .'</td>';
echo '</tr>';

echo '<tr>';
//echo '<td>' . 'Total No Of Apllications =' .'</td>';
}

echo '</table>';
mysql_close($db);


?>

</body>
</html>
