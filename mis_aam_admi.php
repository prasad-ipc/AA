<?php
session_start();
$project=$_SESSION['project'];
$find_url=$_SESSION['find_url'];
//$find_url='"'.$find_url.'"';
?>
<html>
<head>
<link rel="stylesheet" href="css/base.css">
<STYLE TYPE="text/css">
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
</tr>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<?php
//FOR PAGE NUMBERING

//******************************************************************************

$page_name=$find_url; //  If you use this code with a different page ( or file ) name then change this 
if($_SERVER['REQUEST_METHOD'] == "GET") {
$start=$_GET['start'];}else{$start=0;}
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit = 20;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


/////////////// Total number of records in our table. We will use this to break the pages///////
//$num_rows = $dbo->query("select count(benf_id) from benf")->fetchColumn();
/////// The variable num_rows above will store the total number of records in the table////

/////////// Now let us print the table headers ////////////////

//echo "<TABLE class='t1'>";
//echo  "<tr><th>ID</th><th>Name</th><th>Class</th><th>Mark</th></tr>";

////////////// Now let us start executing the query with variables $eu and $limit  set at the top of the page///////////
//$query=" SELECT * FROM student_adv  limit $eu, $limit ";

//////////////// Now we will display the returned records in side the rows of the table/////////
//foreach ($dbo->query($query) as $row) {
//$m=$i%2; // required for alternate color of rows matching to style class 
//$i=$i+1;   //  increment for alternate color of rows

//echo "<tr class='r$m'><td>$row[id]</td><td>$row[name]</td><td>$row[class]</td><td>$row[mark]</td></tr>";
//}
//echo "</table>";
////////////////////////////// End of displaying the table with records ////////////////////////

/////////////////////////////// 
//******************************************************************************
$proj=" and benf.project_id='$project'";
include 'find_period.php';
$where="";
$where.=  $diststring ;
$where.=  $proj ;
//echo $where;
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
           $where
    			 order by distco.district,blockco.block,areaco.nps_id";

$result=mysql_query($query, $db) or die(mysql_error($db)); 
    
// Counting No of Bemeficiaries for heading

$num_rows = mysql_num_rows($result);
include 'mis_heading.php';

if ($num_rows>0) {
  # code...

 $slno =0;
 $query=$query." LIMIT $eu, $limit";
 $result=mysql_query($query, $db) or die(mysql_error($db)); 
 $slno=$start+1;
while ($row = mysql_fetch_array($result)) {
extract($row);


//$_SESSION['slno']=$slno;
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
$slno = $slno+1;
//echo '<tr>';
//echo '<td>' . 'Total No Of Apllications =' .'</td>';
}
echo '<td colspan="18" class="benf"></td>';
echo '</tr>';
echo '</table>';
mysql_close($db);
}else{
  echo '<tr>';
echo '<td colspan="18" class="benf">' . 'NO RECORDS' .'</td>';
echo '</tr>';
  
}
//echo $date_check.'</br>';
//echo $where;


// paging
if($num_rows > $limit ){ // Let us display bottom links if sufficient records are there for paging

/////////////// Start the bottom links with Prev and next link with page numbers /////////////////
echo "<table align = 'center' width='50%'><tr><td align = 'center' width='20%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
if($back >=0) { 
print "<a href='$page_name?start=$back'><font face='Verdana' color=white size='2'>PREV</font></a>"; 
} 
//echo "</td><td align=center width='25%'>";
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
echo "</td><td align = 'center' width='50%'>";
$i=0;
$l=1;
for($i=0;$i < $num_rows;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i'><font face='Verdana' size='2' color=white>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}        /// Current page is not displayed as link and given font color red
$l=$l+1;
}

echo "</td><td align = 'center' width='10%'>";
echo '</td><td>';
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $num_rows) { 
print "<a href='$page_name?start=$next'><font face='Verdana' size='2' color=white>NEXT</font></a>";} 
echo "</td></tr></table>";

}// end of if checking sufficient records are there to display bottom navigational link. 
?>
</body>
</html>
