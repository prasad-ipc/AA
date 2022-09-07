<?php
include 'login_check.php';
?>
<?php
// define variables and set to empty values
$nps_id=$bc_id=$mandal=$nps_name=$contact_no=$emp_vill=$emp_po=$emp_block=
$emp_dist=$emp_id=$emp_doj="";
$nps_idErr=$bc_idErr=$mandalErr=$nps_nameErr=$contact_noErr=$emp_villErr=$emp_poErr=
$emp_blockErr=$emp_distErr=$emp_idErr=$emp_dojErr="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 


if (empty($_POST["nps_id"])) {
   $nps_idErr = "NPS Code is required";
   
   //  $msg = "You left nps_id field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬]/', ($_POST["nps_id"]))) {
      $nps_idErr = "Only use characters and numbers";
       
   } else {

      $nps_id = test_input($_POST["nps_id"]);
      $nps_idErr="ok";
    }
  }




if (empty($_POST["bc_id"])) {
   $bc_idErr = "BC Code is required";
   
   //  $msg = "You left bc_id field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬]/', ($_POST["bc_id"]))) {
      $bc_idErr = "Only use characters and numbers";
       
   } else {

      $bc_id = test_input($_POST["bc_id"]);
      $bc_idErr="ok";
    }
  }




if (empty($_POST["mandal"])) {
   $mandalErr = "mandal is required";
   
   //  $msg = "You left mandal field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["mandal"]))) {
      $mandalErr = "Only use characters and numbers";
       
   } else {

      $mandal = test_input($_POST["mandal"]);
      $mandalErr="ok";
    }
  }

if (empty($_POST["nps_name"])) {
   $nps_nameErr = "nps_name is required";
   
   //  $msg = "You left nps_name field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["nps_name"]))) {
      $nps_nameErr = "Only use characters and numbers";
       
   } else {

      $nps_name = test_input($_POST["nps_name"]);
      $nps_nameErr="ok";
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

if (empty($_POST["emp_vill"])) {
   $emp_villErr = "emp_vill is required";
   
   //  $msg = "You left emp_vill field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["emp_vill"]))) {
      $emp_villErr = "Only use characters and numbers";
       
   } else {

      $emp_vill = test_input($_POST["emp_vill"]);
      $emp_villErr="ok";
    }
  }


if (empty($_POST["emp_po"])) {
   $emp_poErr = "emp_po is required";
   
   //  $msg = "You left emp_po field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["emp_po"]))) {
      $emp_poErr = "Only use characters and numbers";
       
   } else {

      $emp_po = test_input($_POST["emp_po"]);
      $emp_poErr="ok";
    }
  }

if (empty($_POST["emp_block"])) {
   $emp_blockErr = "emp_block is required";
   
   //  $msg = "You left emp_block field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["emp_block"]))) {
      $emp_blockErr = "Only use characters and numbers";
       
   } else {

      $emp_block = test_input($_POST["emp_block"]);
      $emp_blockErr="ok";
    }
  }

if (empty($_POST["emp_dist"])) {
   $emp_distErr = "emp_dist is required";
   
   //  $msg = "You left emp_dist field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["emp_dist"]))) {
      $emp_distErr = "Only use characters and numbers";
       
   } else {

      $emp_dist = test_input($_POST["emp_dist"]);
      $emp_distErr="ok";
    }
  }

if (empty($_POST["emp_id"])) {
    $emp_id="";
    $emp_idErr = "ok";
   
  
   } else  {
  
      $emp_id = test_input($_POST["emp_id"]);
      $emp_idErr="ok";

         
    }
  

  if (empty($_POST["emp_doj"])) {
    $emp_doj="";
   $emp_dojErr = "ok";
   
  
    
       
   } else {

      $emp_doj = test_input($_POST["emp_doj"]);
      $emp_dojErr="ok";
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
</style>
</head>
<body> 
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="heading"> ADD NEW NPS DETAILS
    </div>

<p class="note">* required field.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
<table class="add">
  

<tr>
    <td> 
    NPS Code
    </td>
     <td>
    <input type="text" name="nps_id" >
   <td><span class="error">*</span> <?php echo $nps_idErr;?></td>
  </td> 
</tr>  


<tr>
    <td> 
    BC Code
    </td>
     <td>
    <input type="text" name="bc_id" >
   <td><span class="error">*</span> <?php echo $bc_idErr;?></td>
  </td> 
</tr>  
<tr>
    <td> 
    Mandal
    </td>
     <td>
<input type="text" name="mandal" >
   <td><span class="error">*</span> <?php echo $mandalErr;?></td>
   </td> 
</tr>  
<tr>
    <td> 
    NPS Name
    </td>
     <td>
    <input type="text" name="nps_name" >
   <td><span class="error">*</span> <?php echo $nps_nameErr;?></td>
  </td> 
</tr>  

<tr>
    <td> 
    Contact No
    </td>
     <td>
   <input type="text" name="contact_no" >
   <td><span class="error"> </span><?php echo $contact_noErr;?></td>
 </td> 
</tr>  
<tr>
    <td> 
    Village
    </td>
     <td>
<input type="text" name="emp_vill" >
   <td><span class="error">*</span> <?php echo $emp_villErr;?></td>
   </td> 
</tr>  
<tr>
    <td> 
    PO
    </td>
     <td>
   <input type="text" name="emp_po" >
   <td><span class="error">*</span> <?php echo $emp_poErr;?></td>
  </td> 
</tr> 
<tr>
    <td> 
    BLOCK
    </td>
     <td>
   <input type="text" name="emp_block" >
   <td><span class="error">*</span> <?php echo $emp_blockErr;?></td>
  </td> 
</tr>   
<tr>
    <td> 
    District
    </td>
     <td>
  <input type="text" name="emp_dist" >
   <td><span class="error">*</span> <?php echo $emp_distErr;?></td>
  </td> 
</tr>  
<tr>
    <td> 
    EMP ID
    </td>
     <td>
    <input type="text" name="emp_id" >
   <td><span class="error">*</span> <?php echo $emp_idErr;?></td>
   
 </td> 
</tr>  
<tr>
    <td> 
      Date of Joining
    </td> 
    <td> 
     <input type="date" name="emp_doj" >
   <td><span class="error">*</span> <?php echo $emp_dojErr;?></td>

    </td> 
</tr>  
</tr>  
 
<tr >
     <td>
   
 </td> 
     <td>
   <input type="submit" name="submit" value="ADD"> 
 </td> 
  <td>
   
 </td> 
</tr> 
</form>




</body>
</html>





<?php
if ($nps_idErr=="ok" && $bc_idErr=="ok" && $mandalErr=="ok" && $nps_nameErr=="ok" &&
   $contact_noErr=="ok" && $emp_villErr=="ok" && $emp_poErr=="ok"
   && $emp_blockErr=="ok" && $emp_distErr=="ok" && $emp_idErr=="ok"
   &&$emp_dojErr=="ok"  ) {
   include 'conn.php';

//                               nps_id bc_id  mandal  nps_name contact_no   emp_vill  emp_po emp_block  emp_dist emp_id emp_doj
$query = "INSERT INTO areaco ( nps_id, bc_id,mandal, nps_name, contact_no, emp_vill, emp_po,emp_block, emp_dist,emp_id,emp_doj)
VALUES ( '$nps_id', '$bc_id','$mandal','$nps_name', '$contact_no', '$emp_vill',  '$emp_po', '$emp_block','$emp_dist', '$emp_id','$emp_doj')"; 
      
$result=mysql_query($query) or die(" insert error :".mysql_error());
echo '<p class="success">NPS Successfully Added</p>';

  } else echo '<p class="success">NPS Not Added</p>';

//mysql_close($db);
//exit;
?>


