<?php

// checking district and blocks selected in find for heading
if ($dist=='ALL DISTRICTS') {
  $dist="ANDHRA PRADESH";
} 
if ($blk=='ALL BLOCKS') {
  $blk="";
}

 echo '<div class="heading">'.$project.'   :    DAILY INFORMATION STATEMENT FOR '.
  strtoupper($dist) . ' '.strtoupper($blk). ' : '. $date_check.' '." : " .$tnos.' NOS   '.'</div>';

?>