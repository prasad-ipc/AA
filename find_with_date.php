<?php
$dist=$_POST['selection'];
$date=$_POST['date'];
$date_check=$_POST['date'];
$blk=$_POST['selection1'];


if(!$date_check){
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
                        
                        $diststring="where date='$date_check'";
                        } else {
                        # code...
                        
                        $diststring="where distco.district = '$dist' AND date='$date_check'";
                        }

             } else {

                        if ($dist=='ALL DISTRICTS')  {
                            # code...
                            $diststring="where blockco.block= '$blk' AND date='$date_check'";
                            
                        } else {
                             $diststring="where distco.district = '$dist' AND blockco.block= '$blk' AND date='$date_check'";
                                }  

            }
}

?>
<!-- 
if(!$date_check){
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
                        
                        $diststring="where MONTH(benf_date)='$month_no' and YEAR(benf_date)='$year'";
                        } else {
                        # code...
                        
                        $diststring="where distco.district = '$dist' AND MONTH(benf_date)='$month_no' and YEAR(benf_date)='$year'";
                        }

             } else {

                        if ($dist=='ALL DISTRICTS')  {
                            # code...
                            $diststring="where blockco.block= '$blk' AND MONTH(benf_date)='$month_no' and YEAR(benf_date)='$year'";
                            
                        } else {
                             $diststring="where distco.district = '$dist' AND blockco.block= '$blk' AND MONTH(benf_date)='$month_no' and YEAR(benf_date)='$year'";
                                }  

            }
} -->