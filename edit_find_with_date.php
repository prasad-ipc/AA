<?php
/*session_start()
$dist=$_SESSION['selection'];
$dt=$_SESSION['date'];
$blk=$_SESSION['selection1'];
//Check for where string
/*
/*
$dist=$_POST['selection'];
$dt=$_POST['date'];
$blk=$_POST['selection1'];*/
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

?>