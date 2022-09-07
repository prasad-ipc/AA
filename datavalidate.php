

<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values

$benf_date = $project_id = $nps_id = $benf_name = 
$benf_f_name = $contact_no=$benf_vill=$benf_mandal=$benf_dist=$benf_pincode=$Remarks="";

$dateErr = $project_idErr = $nps_idErr = $benf_nameErr = 
$benf_f_nameErr = $contact_noErr=$benf_villErr=$benf_mandalErr=$benf_distErr=
$benf_pincodeErr=$RemarksErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["benf_date"])) {
     $dateErr = "Date is required";
     $msg = "You left date field empty.";
    echo $msg;
   exit;
   } else {
     $benf_date = test_input($_POST["benf_date"]);
     
   }

   
   if (empty($_POST["project_id"])) {
     $project_idErr = "project_id is required";
     $msg = "You left project_id field empty.";
    echo $msg;
    exit;
   } else {
     $project_id = test_input($_POST["project_id"]);
     // check if e-mail address is well-formed
     if (!preg_match("/^[a-zA-Z ]*$/",$project_id)) {
       $project_idErr = "Only use characters and numbers"; 
     }
   }
  if (empty($_POST["nps_id"])) {
     $nps_idErr = "nps_id is required";
     $msg = "You left nps_id field empty.";
    echo $msg; 
    exit;
   } else {
     $nps_id = test_input($_POST["nps_id"]);
     
   }


if (empty($_POST["benf_name"])) {
     $benf_nameErr = "benf name is required";
     $msg = "You left benf_name field empty.";
    echo $msg; 
    exit;
   } else {
     $benf_name = test_input($_POST["benf_name"]);
 
     if (!preg_match("/^[a-zA-Z ]*$/",$benf_name)) {
       $benf_nameErr = "Only use characters and numbers";
           exit;
     }
   }
  
if (empty($_POST["benf_f_name"])) {
     $benf_f_nameErr = "benf father/husband name is required";
      $msg = "You left benf f/h name field empty.";
    echo $msg; 
    exit;
   } else {
     $benf_f_name = test_input($_POST["benf_f_name"]);
     // 
     if (!preg_match("/^[a-zA-Z ]*$/",$benf_f_name)) {
       $benf_f_nameErr = "Only use characters and numbers"; 
           exit;

     }
   }



if (empty($_POST["contact_no"])) {
     $contact_no = "";
   } else {
     $contact_no = test_input($_POST["contact_no"]);
     
   }

if (empty($_POST["benf_vill"])) {
     $benf_villErr = "benf vill is required";

      $msg = "You left benf vill name field empty.";
      echo $msg; 
    exit;
   } else {
     $benf_vill = test_input($_POST["benf_vill"]);
    
   }

if (empty($_POST["benf_mandal"])) {
     $benf_mandalErr = "benf Mandal is required";
     $msg = "You left benf mandal field empty.";
    echo $msg; 
    exit;
   } else {
     $benf_mandal = test_input($_POST["benf_mandal"]);
    
   }



if (empty($_POST["benf_dist"])) {
     $benf_distErr = "benf Dist is required";
     $msg = "You left benf_dist field empty.";
    echo $msg; 
    exit;
   } else {
     $benf_dist = test_input($_POST["benf_dist"]);
   
   }



if (empty($_POST["benf_pincode"])) {
     $benf_pincode = "";
   } else {
     $benf_pincode = test_input($_POST["benf_pincode"]);
   
   }


if (empty($_POST["Remarks"])) {
     $Remarks = "";
   } else {
     $Remarks = test_input($_POST["Remarks"]);
     
     }
   }





function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="insertdata.php"> 
    
    date: <input type="date" name="benf_date" value="<?php echo $benf_date;?>">
   <span class="error">* <?php echo $dateErr;?></span>
   <br><br>
   project_id: <input type="text" name="project_id" value="<?php echo $project_id;?>">
   <span class="error">* <?php echo $project_idErr;?></span>
   <br><br>
   NPS ID: <input type="text" name="nps_id" value="<?php echo $nps_id;?>">
   <span class="error">* <?php echo $nps_idErr;?></span>
   <br><br>
   benf_name: <input type="text" name="benf_name" value="<?php echo $benf_name;?>">
   <span class="error">* <?php echo $benf_nameErr;?></span>
   <br><br>
   benf_f_name: <input type="text" name="benf_f_name" value="<?php echo $benf_f_name;?>">
   <span class="error">* <?php echo $benf_f_nameErr;?></span>
   <br><br>
   contact_no: <input type="text" name="contact_no" value="<?php echo $contact_no;?>">
   <span class="error">* <?php echo $contact_noErr;?></span>
   <br><br>
   benf_vill: <input type="text" name="benf_vill" value="<?php echo $benf_vill;?>">
   <span class="error">* <?php echo $benf_villErr;?></span>
   <br><br>
   benf_mandal: <input type="text" name="benf_mandal" value="<?php echo $benf_mandal;?>">
   <span class="error">* <?php echo $benf_mandalErr;?></span>
   <br><br>
   benf_dist: <input type="text" name="benf_dist" value="<?php echo $benf_dist;?>">
   <span class="error">* <?php echo $benf_distErr;?></span>
   <br><br>
   benf_pincode: <input type="text" name="benf_pincode" value="<?php echo $benf_pincode;?>">
   <br><br>
   Remarks: <input type="text" name="Remarks" value="<?php echo $Remarks;?>">
   <br><br>
   <input type="submit" name="submit1" value="Submit"> 
</form>




</body>
</html>