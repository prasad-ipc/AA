<?php
include 'login_check.php';
?>
<html>
<head>
    <link rel="stylesheet" href="css/base.css">
<style>
        
</style>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'menu.php';?>

<table>
        <tr>
            <th class="district"> STATE</th>
            <th class="district"> DISTRICT</th>
            <th class="district"> DC NAME</th>
            <th class="district"> EMP ID</th>
            <th class="district"> EMP DOJ</th>
            <th class="district"> CONTACT NO</th>
            <th class="district"> VILL</th>
            <th class="district"> PO</th>
            <th class="district"> MANDAL</th>
            <th class="district"> DISTRICT</th>
            <th class="block"> BLOCK</th>
            <th class="block"> BC NAME</th>
        	<th class="block"> EMP ID</th>
            <th class="block"> EMP DOJ</th>
            <th class="block"> CONTACT NO</th>
            <th class="block"> VILL</th>
            <th class="block"> PO</th>
            <th class="block"> MANDAL</th>
            <th class="block"> DISTRICT</th>
            <th class="nps"> NPS ID</th>
            <th class="nps">NPS Name</th>
            <th class="nps"> MANDAL</th>
            <th class="nps"> Emp ID</th>
            <th class="nps"> EMP DOJ</th>
            <th class="nps"> CONTACT No</th>
            <th class="nps"> VILL</th>
            <th class="nps"> PO</th>
            <th class="nps"> MANDAL</th>
            <th class="nps"> DISTRICT</th>
</tr>
<?php
include 'find.php';
include 'emp_heading.php';
//connect to MySQL
include 'conn.php';
$query =	"SELECT stateco.state_name as state,distco.dc_id,distco.district as district,
	distco.dc_name,	distco.emp_id as dc_emp_id,distco.emp_doj as dc_emp_doj,
	distco.contact_no as dc_emp_contact_no,	distco.emp_vill as dc_emp_vill, distco.emp_po as dc_emp_po,
	distco.emp_mandal as dc_emp_mandal,	distco.emp_dist as dc_emp_dist,blockco.bc_id, blockco.block,blockco.bc_name,
	blockco.emp_id as bc_emp_id,blockco.emp_doj as bc_emp_doj,blockco.contact_no as bc_emp_contact_no,
	blockco.emp_vill as bc_emp_vill,blockco.emp_po as bc_emp_po,blockco.emp_mandal as bc_emp_mandal,
	blockco.emp_dist as bc_emp_dist,areaco.nps_name,areaco.mandal,areaco.nps_id,areaco.emp_id as nps_emp_id,
	areaco.emp_doj  as nps_emp_doj,	areaco.contact_no  as nps_emp_contact_no,
	areaco.emp_vill as nps_emp_vill,areaco.emp_po as nps_emp_po,areaco.mandal as nps_emp_mandal,
	areaco.emp_dist as nps_emp_dist
	 		
    FROM stateco   LEFT JOIN distco ON stateco.sc_id = distco.sc_id 
    			  LEFT JOIN  blockco ON distco.dc_id = blockco.dc_id
    			  LEFT JOIN  areaco ON blockco.bc_id = areaco.bc_id 
    			 $diststring
    			 order by distco.district,blockco.block,areaco.nps_id";
$result=mysql_query($query, $db) or die(mysql_error($db)); 
$num_rows = mysql_num_rows($result);   
$tnos =0;
if ($num_rows>0) {
 // show the results
        while ($row = mysql_fetch_array($result)) {
                extract($row);
                $tnos = $tnos+1;
                        
                echo '<tr>';
                echo '<td>' . $state .'</td>';
                echo '<td>' . $district .'</td>';
                echo '<td>' . $dc_name .'</td>';
                echo '<td>' . $dc_emp_id .'</td>';
                echo '<td>' . $dc_emp_doj .'</td>';
                echo '<td>' . $dc_emp_contact_no .'</td>';
                echo '<td>' . $dc_emp_vill .'</td>';
                echo '<td>' . $dc_emp_po .'</td>';
                echo '<td>' . $dc_emp_mandal .'</td>';
                echo '<td>' . $dc_emp_dist .'</td>';
                echo '<td>' . $block .'</td>';
                echo '<td>' . $bc_name .'</td>';
                echo '<td>' . $bc_emp_id .'</td>';
                echo '<td>' . $bc_emp_doj .'</td>';
                echo '<td>' . $bc_emp_contact_no .'</td>';
                echo '<td>' . $bc_emp_vill .'</td>';
                echo '<td>' . $bc_emp_po .'</td>';
                echo '<td>' . $bc_emp_mandal .'</td>';
                echo '<td>' . $bc_emp_dist .'</td>';
                echo '<td>' . $nps_id .'</td>';
                echo '<td>' . $nps_name .'</td>';
                echo '<td>' . $mandal .'</td>';
                echo '<td>' . $nps_emp_id .'</td>';
                echo '<td>' . $nps_emp_doj .'</td>';
                echo '<td>' . $nps_emp_contact_no .'</td>';
                echo '<td>' . $nps_emp_vill .'</td>';
                echo '<td>' . $nps_emp_po .'</td>';
                echo '<td>' . $nps_emp_mandal .'</td>';
                echo '<td>' . $nps_emp_dist .'</td>';
                echo '</tr>';
        }

    }else{

echo '<tr>';
echo '<td colspan="29" >' . 'NO RECORDS' .'</td>';
echo '</tr>';

echo '</table>';
mysql_close($db);
}

?>

</body>
</html>
