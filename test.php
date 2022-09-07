<?php
// define variables and set to empty values
$benf_date=$project_id=$nps_id=$benf_name=$benf_f_name=$contact_no=$benf_vill=$benf_mandal=
$benf_dist=$benf_pincode=$remarks="";
$benf_dateErr=$project_idErr=$nps_idErr=$benf_nameErr=$benf_f_nameErr=$contact_noErr=$benf_villErr=$benf_mandalErr=
$benf_distErr=$benf_pincodeErr=$remarksErr="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["benf_date"])) {
   $benf_dateErr = "benf_date is required";
   
   //  $msg = "You left benf_date field empty.";
   // echo $msg;
  
   } else  {
   if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $benf_date)){ 
      $benf_dateErr = "Enter date in YYYY-MM-DD format only";
       
   } else {

      $benf_date = test_input($_POST["benf_date"]);
      $benf_dateErr="ok";
    }
  }





if (empty($_POST["project_id"])) {
   $project_idErr = "project_id is required";
   
   //  $msg = "You left project_id field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["project_id"]))) {
      $project_idErr = "Only use characters and numbers";
       
   } else {

      $project_id = test_input($_POST["project_id"]);
      $project_idErr="ok";
    }
  }

if (empty($_POST["nps_id"])) {
   $nps_idErr = "nps_id is required";
   
   //  $msg = "You left nps_id field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["nps_id"]))) {
      $nps_idErr = "Only use characters and numbers";
       
   } else {

      $nps_id = test_input($_POST["nps_id"]);
      $nps_idErr="ok";
    }
  }


if (empty($_POST["benf_name"])) {
   $benf_nameErr = "benf_name is required";
   
   //  $msg = "You left benf_name field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["benf_name"]))) {
      $benf_nameErr = "Only use characters and numbers";
       
   } else {

      $benf_name = test_input($_POST["benf_name"]);
      $benf_nameErr="ok";
    }
  }

if (empty($_POST["benf_f_name"])) {
   $benf_f_nameErr = "benf_f_name is required";
   
   //  $msg = "You left benf_name field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["benf_f_name"]))) {
      $benf_f_nameErr = "Only use characters and numbers";
       
   } else {

      $benf_f_name = test_input($_POST["benf_f_name"]);
      $benf_f_nameErr="ok";
    }
  }

if (empty($_POST["contact_no"])) {
   $contact_no = "";
   $contact_noErr="ok";
   
   //  $msg = "You left contact_no field empty.";
   // echo $msg;
  
   } else  {
  if (preg_match('/([0-9]{10})/', $_POST["contact_no"])){
      $contact_no = test_input($_POST["contact_no"]);
      $contact_noErr="ok";

          } else {
      
      $contact_noErr = "Only use 10 Digits";
    }
  }

if (empty($_POST["benf_vill"])) {
   $benf_villErr = "benf_vill is required";
   
   //  $msg = "You left benf_vill field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["benf_vill"]))) {
      $benf_villErr = "Only use characters and numbers";
       
   } else {

      $benf_vill = test_input($_POST["benf_vill"]);
      $benf_villErr="ok";
    }
  }

if (empty($_POST["benf_mandal"])) {
   $benf_mandalErr = "benf_mandal is required";
   
   //  $msg = "You left benf_mandal field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["benf_mandal"]))) {
      $benf_mandalErr = "Only use characters and numbers";
       
   } else {

      $benf_mandal = test_input($_POST["benf_mandal"]);
      $benf_mandalErr="ok";
    }
  }

if (empty($_POST["benf_dist"])) {
   $benf_distErr = "benf_dist is required";
   
   //  $msg = "You left benf_dist field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["benf_dist"]))) {
      $benf_distErr = "Only use characters and numbers";
       
   } else {

      $benf_dist = test_input($_POST["benf_dist"]);
      $benf_distErr="ok";
    }
  }

if (empty($_POST["benf_pincode"])) {
   $benf_pincodeErr = "benf_pincode is required";
   
   //  $msg = "You left benf_pincode field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["benf_pincode"]))) {
      $benf_pincodeErr = "Only use characters and numbers";
       
   } else {

      $benf_pincode = test_input($_POST["benf_pincode"]);
      $benf_pincodeErr="ok";
    }
  }



if (empty($_POST["remarks"])) {
   $remarksErr = "remarks is required";
   
   //  $msg = "You left remarks field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["remarks"]))) {
      $remarksErr = "Only use characters and numbers";
       
   } else {

      $remarks = test_input($_POST["remarks"]);
      $remarksErr="ok";
    }
  }


}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<!DOCTYPE HTML> 
<html>
<head>
   <link rel="stylesheet" href="css/base.css">
<style>
.note {
  color: #FF0000;
text-align: center;
font-size: 20px;
}
.error {
  color: #FF0000;
}

table{
  width: 50%;
  margin-left: 25%;
}
tr,td{
  height: 35px;

}
.emp_heading {
    position: static;
text-align: center;
font-size: 25px;
color: #FFF;
background-color:#4D0202;
padding: 2px;
margin-top: =12px;  
 }
</style>
</head>
<body> 
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="emp_heading"> ADD BENEFICIARY DETAILS
    </div>

<p class="note">* required field.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
<table>
  <tr>
    <td> 
      Date
    </td> 
    <td> 
     <input type="date" name="benf_date" value="<?php echo $benf_date;?>">
   <td><span class="error">* <?php echo $benf_dateErr;?></span></td>

    </td> 
</tr>  
<tr>
    <td> 
    Project
    </td>
     <td>
   <input type="text" name="project_id" value="<?php echo $project_id;?>">
   <td><span class="error">* <?php echo $project_idErr;?></span></td>
  </td> 
</tr>  
<tr>
    <td> 
    NPS Code
    </td>
     <td>
    <input type="text" name="nps_id" value="<?php echo $nps_id;?>">
   <td><span class="error">* <?php echo $nps_idErr;?></span></td>
  </td> 
</tr>  
<tr>
    <td> 
    Name
    </td>
     <td>
    <input type="text" name="benf_name" value="<?php echo $benf_name;?>">
   <td><span class="error">* <?php echo $benf_nameErr;?></span></td>
  </td> 
</tr>  
<tr>
    <td> 
    Fath/Husb Name
    </td>
     <td>
   <input type="text" name="benf_f_name" value="<?php echo $benf_f_name;?>">
   <td><span class="error">* <?php echo $benf_f_nameErr;?></span></td>
 </td> 
</tr>  
<tr>
    <td> 
    Contact No
    </td>
     <td>
   <input type="text" name="contact_no" value="<?php echo $contact_no;?>">
   <td><span class="error"> <?php echo $contact_noErr;?></span></td>
 </td> 
</tr>  
<tr>
    <td> 
    Village
    </td>
     <td>
<input type="text" name="benf_vill" value="<?php echo $benf_vill;?>">
   <td><span class="error">* <?php echo $benf_villErr;?></span></td>
   </td> 
</tr>  
<tr>
    <td> 
    Mandal
    </td>
     <td>
   <input type="text" name="benf_mandal" value="<?php echo $benf_mandal;?>">
   <td><span class="error">* <?php echo $benf_mandalErr;?></span></td>
  </td> 
</tr>  
<tr>
    <td> 
    District
    </td>
     <td>
  <input type="text" name="benf_dist" value="<?php echo $benf_dist;?>">
   <td><span class="error">* <?php echo $benf_distErr;?></span></td>
  </td> 
</tr>  
<tr>
    <td> 
    Pincode
    </td>
     <td>
    <input type="text" name="benf_pincode" value="<?php echo $benf_pincode;?>">
   <td><span class="error">* <?php echo $benf_pincodeErr;?></span></td>
   
 </td> 
</tr>  
<tr>
    <td> 
    remarks
    </td>
     <td>
    <input type="text" name="remarks" value="<?php echo $remarks;?>">
   <td><span class="error">* <?php echo $remarksErr;?></span></td>
 </td> 
</tr>  
<tr colspan='3'>
    
     <td>
   <input type="submit" name="submit" value="ADD"> 
 </td> 
</tr> 
</form>




</body>
</html>





<?php
if ($benf_dateErr=="ok" && $project_idErr=="ok" && $nps_idErr=="ok" && $benf_nameErr=="ok" && $benf_f_nameErr=="ok" && $contact_noErr=="ok" && $benf_villErr=="ok" && $benf_villErr=="ok" && $benf_mandalErr=="ok" && $benf_distErr=="ok" && $benf_pincodeErr=="ok" && $remarksErr=="ok") {
    $db = mysql_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//make sure our recently created database is the active one
mysql_select_db('NPS', $db) or die(mysql_error($db));


$query = "INSERT INTO benf (benf_date, project_id, nps_id, benf_name, benf_fath_name, benf_contact_no, benf_vill, benf_mandal, benf_dist, benf_pin,benf_remarks)
VALUES ('$benf_date', '$project_id', '$nps_id', '$benf_name', '$benf_f_name', '$contact_no', '$benf_vill',  '$benf_mandal', '$benf_dist', '$benf_pincode', '$remarks')"; 
      
$result=mysql_query($query) or die(" insert error :".mysql_error());
echo "Successful";

  }

//mysql_close($db);
//exit;
?>


