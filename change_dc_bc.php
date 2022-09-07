<?php
require 'conn.php';  // Database connection
//////// End of connecting to database ////////
?>

<script>
function myFunction(val,val2) {
    var dc_id=val;
    /*alert(val2);*/
    self.location=val2+'?dist=' + dc_id ;
}
</script>

<?Php
@$dc=$_GET['dist'];

    $query =  "SELECT * FROM distco order by distco.district";
    $result=mysql_query($query, $db) or die(mysql_error($db)); 
  

//***********NOTE************* $find_url coming from sum_by_dc/bc/nps/etc.php through find_body_summary.php*****************
echo "<td><select name='district' onchange=\"myFunction(this.form.district.options[this.form.district.options.selectedIndex].value,'$find_url')\"><option value=''>ALL DISTRICTS</option>";

    while ($row = mysql_fetch_array($result)) {
    extract($row);
    if($dc_id==@$dc){echo '<option selected value=' . '"'.$dc_id.'"' . '>'. strtoupper($district) . '</option><BR>';}else{

echo '<option value=' . '"'.$dc_id.'"' . '>'. strtoupper($district) . '</option>';}
}
echo '</select></td>';


 if(isset($dc)){
    
   $query1 =  "SELECT * FROM blockco where dc_id= '$dc' order by blockco.block";
    }else{
    $query1 =  "SELECT * FROM blockco order by blockco.block";
     }
    $result=mysql_query($query1, $db) or die(mysql_error($db)); 

echo '<td><select  name="block" >';
echo '<option value="">ALL BLOCKS</option>';
    while ($row = mysql_fetch_array($result)) {
    extract($row);
echo '<option value=' . '"'.$block.'"' . '>'. strtoupper($block) . '</option>';
}
echo '</select></td>';///
/*echo "</form>";
*/?>

