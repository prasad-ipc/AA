<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
$dist=$_POST['selection'];
$_SESSION['dist']=$dist;
$date=$_POST['date'];
$_SESSION['date']=$date;
$date_check=$_POST['date'];
$blk=$_POST['selection1'];
$_SESSION['blk']=$blk;
//$_SESSION['slno']="";
}  else {
    $dist=$_SESSION['dist'];
    $blk=$_SESSION['blk'];
    $date=$_SESSION['date'];
    $date_check=$_SESSION['date'];
}
$date=strtotime($date);
if($date>0){
$month_no=date("m",$date);
$year=date("Y",$date);
}

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