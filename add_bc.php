<?php
include 'login_check.php';
?>
<?php
// define variables and set to empty values
$bc_id=$dc_id=$block=$bc_name=$contact_no=$emp_vill=$emp_po=$emp_mandal=
$emp_dist=$emp_id=$emp_doj="";
$bc_idErr=$dc_idErr=$blockErr=$bc_nameErr=$contact_noErr=$emp_villErr=$emp_poErr=
$emp_mandalErr=$emp_distErr=$emp_idErr=$emp_dojErr="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
 


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




if (empty($_POST["dc_id"])) {
   $dc_idErr = "DC Code is required";
   
   //  $msg = "You left dc_id field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬]/', ($_POST["dc_id"]))) {
      $dc_idErr = "Only use characters and numbers";
       
   } else {

      $dc_id = test_input($_POST["dc_id"]);
      $dc_idErr="ok";
    }
  }




if (empty($_POST["block"])) {
   $blockErr = "block is required";
   
   //  $msg = "You left block field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["block"]))) {
      $blockErr = "Only use characters and numbers";
       
   } else {

      $block = test_input($_POST["block"]);
      $blockErr="ok";
    }
  }

if (empty($_POST["bc_name"])) {
   $bc_nameErr = "bc_name is required";
   
   //  $msg = "You left bc_name field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["bc_name"]))) {
      $bc_nameErr = "Only use characters and numbers";
       
   } else {

      $bc_name = test_input($_POST["bc_name"]);
      $bc_nameErr="ok";
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

if (empty($_POST["emp_mandal"])) {
   $emp_mandalErr = "emp_mandal is required";
   
   //  $msg = "You left emp_mandal field empty.";
   // echo $msg;
  
   } else  {
   if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', ($_POST["emp_mandal"]))) {
      $emp_mandalErr = "Only use characters and numbers";
       
   } else {

      $emp_mandal = test_input($_POST["emp_mandal"]);
      $emp_mandalErr="ok";
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
   
$emp_id = "";
   $emp_idErr="ok";

    //$emp_idErr = "Emp ID is required";
   
   //  $msg = "You left emp_id field empty.";
   // echo $msg;
  
   } else  {
  //if (preg_match('/([0-9]{6})/', $_POST["emp_id"])){
      $emp_id = test_input($_POST["emp_id"]);
      $emp_idErr="ok";

    //      } else {
      
    //  $emp_idErr = "Enter valid Emp ID";
    //}
  }

  if (empty($_POST["emp_doj"])) {


$emp_doj = "";
   $emp_dojErr="ok";
   //$emp_dojErr = "emp_doj is required";
   
   //  $msg = "You left emp_doj field empty.";
   // echo $msg;
  
   } else  {
   if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $emp_doj)){ 
      $emp_dojErr = "Enter date in YYYY-MM-DD format only";
       
   } else {

      $emp_doj = test_input($_POST["emp_doj"]);
      $emp_dojErr="ok";
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
</style>
</head>
<body> 
<?php include 'header.php'; ?>
<?php include 'menu.php';?>
<div class="heading"> ADD NEW BC DETAILS
    </div>

<p class="note">* required field.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
<table class="add">
  

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
    DC Code
    </td>
     <td>
    <input type="text" name="dc_id" >
   <td><span class="error">*</span> <?php echo $dc_idErr;?></td>
  </td> 
</tr>  
<tr>
    <td> 
    block
    </td>
     <td>
<input type="text" name="block" >
   <td><span class="error">*</span> <?php echo $blockErr;?></td>
   </td> 
</tr>  
<tr>
    <td> 
    BC Name
    </td>
     <td>
    <input type="text" name="bc_name" >
   <td><span class="error">*</span> <?php echo $bc_nameErr;?></td>
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
    Mandal
    </td>
     <td>
   <input type="text" name="emp_mandal" >
   <td><span class="error">*</span> <?php echo $emp_mandalErr;?></td>
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
if ($bc_idErr=="ok" && $dc_idErr=="ok" && $blockErr=="ok" && $bc_nameErr=="ok" &&
   $contact_noErr=="ok" && $emp_villErr=="ok" && $emp_poErr=="ok"
   && $emp_mandalErr=="ok" && $emp_distErr=="ok" && $emp_idErr=="ok"
   &&$emp_dojErr=="ok"  ) {
include 'conn.php';
//                               bc_id dc_id  block  bc_name contact_no   emp_vill  emp_po emp_mandal  emp_dist emp_id emp_doj
$query = "INSERT INTO blockco ( bc_id, dc_id,block, bc_name, contact_no, emp_vill, emp_po,emp_mandal, emp_dist,emp_id,emp_doj)
VALUES ( '$bc_id', '$dc_id','$block','$bc_name', '$contact_no', '$emp_vill',  '$emp_po', '$emp_mandal','$emp_dist', '$emp_id','$emp_doj')"; 
      
$result=mysql_query($query) or die(" insert error :".mysql_error());
echo '<p class="success">BC Successfully Added</p>';

  } else echo '<p class="success">BC Not Added</p>';

//mysql_close($db);
//exit;
?>


