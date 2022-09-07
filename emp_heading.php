<?php

// checking district and blocks selected in find for heading
if ($dist=='ALL DISTRICTS') {
  $dist="ANDHRA PRADESH";
}
if ($blk=='ALL BLOCKS') {
  $blk="";
}
//converting date selected in find to month and year for heading

 echo '<div class="heading">'.'EMPLOYEES FOR '.
  strtoupper($dist) . ' '.strtoupper($blk).'</div>';

?>