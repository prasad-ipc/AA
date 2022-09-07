<?php
session_start();
$dist=$_SESSION['selection'];
$dt=$_SESSION['date'];
$blk=$_SESSION['selection1'];
//Check for where string

if(!$dt){
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

}else{

            if ( $blk== 'ALL BLOCKS') {

                    if ($dist=='ALL DISTRICTS') {
                    # code...
                        
                        $diststring="where benf_date='$dt'";
                        } else {
                        # code...
                        
                        $diststring="where distco.district = '$dist' AND benf_date='$dt'";
                        }

             } else {

                        if ($dist=='ALL DISTRICTS')  {
                            # code...
                            $diststring="where blockco.block= '$blk' AND benf_date='$dt'";
                            
                        } else {
                             $diststring="where distco.district = '$dist' AND blockco.block= '$blk' AND benf_date='$dt'";
                                }  

            }
}




$query =  "SELECT 
       distco.dc_id,blockco.bc_id,distco.district, blockco.block,areaco.nps_name,areaco.emp_id,benf.benf_id,benf.project_id,benf.benf_date,benf.benf_name,
       benf.benf_fath_name,benf.benf_vill,benf.benf_mandal,benf.benf_dist,benf.benf_pin,
       blockco.bc_name,distco.dc_name,benf.benf_remarks,benf.nps_id,stateco.sc_id as state,benf.benf_contact_no,projects.project_title
      
    FROM stateco join distco ON stateco.sc_id = distco.sc_id 
           join blockco ON distco.dc_id = blockco.dc_id
           join areaco ON blockco.bc_id = areaco.bc_id 
           join benf ON areaco.nps_id = benf.nps_id
           join projects on benf.project_id=projects.project_title
           $diststring
           order by blockco.dc_id,blockco.bc_id,benf.nps_id";






//connect to MySQL
include 'conn.php';
$rs = mysql_query($query );
$result = array(); 
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>