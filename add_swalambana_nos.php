<?php
include 'login_check.php';
?>
<?php
// define variables and set to empty values
echo '<link rel="stylesheet" href="css/base.css">';
$nps_id=$date=$nos="";
$nps_idErr=$dateErr=$nosErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $project_id = $_POST["project_id"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if (empty($_POST["nps_id"])) {
   $nps_idErr = "NPS CODE REQUIRED";
   
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["date"])) {
   $dateErr = "date is required";
   
   //  $msg = "You left date field empty.";
   // echo $msg;
  
   } else  {
   if(preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $date)){ 
      $dateErr = "Enter date in YYYY-MM-DD format only";
       
   } else {

      $date = test_input($_POST["date"]);
      $dateErr="ok";
    }
  }



if (empty($_POST["nos"])) {
   
    $nosErr = "Nos is required";
   
   //  $msg = "You left nos field empty.";
   // echo $msg;
  
   } else  {
  if (preg_match('/([0-9]{1})/', $_POST["nos"])){
      $nos = test_input($_POST["nos"]);
      $nosErr="ok";

          } else {
      
      $nosErr = "Enter valid Number";
    }
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
<div class="heading"> SWALAMBANA APPLICATIONS
    </div>

<p class="note">* REQUIRED FIELD</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
<table class="add">
<tr>
<td> 
    PROJECT
    </td>
   <td>

  <select  name="project_id" >
  <option value="SWALAMBANA">SWALAMBANA</option>
  <option value="AAM ADMI">AAM ADMI</option>
  </select>

</td>
</tr>

  <tr>
    <td> 
    NPS Code
    </td>
     <td>
    <input type="text" name="nps_id" value="<?php echo $nps_id;?>">
   <td><span class="error">*</span> <?php echo $nps_idErr;?></td>
  </td> 
</tr>  
  <tr>
    <td> 
      Date
    </td> 
    <td> 
     <input type="date" name="date" value="<?php echo $date;?>">
   <td><span class="error">*</span> <?php echo $dateErr;?></td>

    </td> 
</tr>  
<tr>
    <td> 
    Nos
    </td>
     <td>
    <input type="text" name="nos" value="<?php echo $nos;?>">
   <td><span class="error">*</span> <?php echo $nosErr;?></td>
   
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
if ($nps_idErr=="ok" && $dateErr=="ok"  && $nosErr=="ok") {
    include 'conn.php';;

$query = "INSERT INTO applications ( project_id,nps_id,`date`, nos)
VALUES ('$project_id','$nps_id', '$date', '$nos')"; 
      
$result=mysql_query($query) or die(" insert error :".mysql_error());
echo '<p STYLE="position:absolute;margin-left: 870px;margin-top: 180px;color:red;font-weight:bold;font-size:20px";>SUCCESSFULLY ADDED</p>';

  } else {echo '<p STYLE="position:absolute;margin-left: 860px;margin-top: 180px;color:red;font-weight:bold;font-size:20px";>NOT ADDED</p>';}

//mysql_close($db);
//exit;
?>


