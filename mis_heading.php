<?php

// checking district and blocks selected in find for heading
if ($dist=='ALL DISTRICTS') {
  $dist="";
}
if ($blk=='ALL BLOCKS') {
  $blk="";
}
//converting date selected in find to month and year for heading
if($date>0){
$month=strtoupper(date("F",$date));
//$year=date("Y",$dt);
$month_year=" FOR"." ".$month."  ".$year." ";
} else {
$month_year="";
}
 echo '<div class="heading">'.$project.'   :    MONTHLY INFORMATION STATEMENT FOR '.
  strtoupper($dist) . ' '.strtoupper($blk). ' : '. $month_year.' '." : " .$num_rows.' NOS   '.'</div>';

?>