<?php
session_start();
$dist=$_SESSION['selection'];
$blk=$_SESSION['selection1'];
//Check for where string





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


$query =  "SELECT 
       areaco.id,areaco.nps_id,areaco.bc_id,areaco.mandal,areaco.nps_name,
       areaco.contact_no,areaco.emp_vill,areaco.emp_po,areaco.emp_block,
       areaco.emp_dist,areaco.emp_id,areaco.emp_doj,distco.dc_id,
       blockco.bc_id,distco.district, blockco.block,
       blockco.bc_name,distco.dc_name,distco.sc_id
      
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
           join blockco ON distco.dc_id = blockco.dc_id
           join areaco ON blockco.bc_id = areaco.bc_id 
        
           $diststring
           order by blockco.dc_id,blockco.bc_id,areaco.nps_id";




//connect to MySQL
include 'conn.php';
$rs = mysql_query($query );
$result = array(); 
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>