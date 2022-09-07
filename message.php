<html>
<head>
	<title>Add application</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'menu.php';?>

Date  Project id  NPS Code  Benf Name Benf F/H Name Benf Contact No.  Benf Village  Benf Mandal Benf Dist   Benf Pincode  Remarks ( Mode of Payment/date)

  
benf_date project_id nps_id benf_name benf_fath_name benf_contact_no benf_vill
benf_mandal benf_dist benf_pin benf_remarks

<?php
// define variables and set to empty values
$date = $project_id = $nps_id = $benf_name = 
$benf_f_name = $contact_no=$benf_vill=$benf_mandal=$benf_dist=$benf_pincode=$Remarks"";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $date = test_input($_POST["date"]);
  $project_id = test_input($_POST["project_id"]);
  $nps_id = test_input($_POST["nps_id"]);
  $benf_name = test_input($_POST["benf_name"]);
  $benf_f_name = test_input($_POST["benf_f_name"]);

  $contact_no = test_input($_POST["contact_no"]);
  $benf_vill = test_input($_POST["benf_vill"]);
  $benf_mandal = test_input($_POST["benf_mandal"]);
  $benf_dist = test_input($_POST["benf_dist"]);
  $benf_pincode = test_input($_POST["benf_pincode"]);
  $Remarks = test_input($_POST["Remarks"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>






<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
<label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 

</form>






</body>
</html>