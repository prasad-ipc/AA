<?php
session_unset();
?>
<html>
 <head>
    
<link rel="stylesheet" href="css/base.css"> 
<link rel="stylesheet" href="css/find.css">
  <title>HOSTGOD - Please Log In</title>
  <style>
 

  #login{
    width: 100%;
    height: 100%;
  }
.centered {
  width: 25%;
height: 25%;
  position: relative;
  margin-bottom: auto;
  margin-top: 100px;
  margin-left:auto;
  margin-right: auto;
  font-family: arial;
}
p{
  font-size: 15px;
}
</style>
 </head>
 <body>
<?php include 'header.php'; ?>
<div id="login">
<div class="centered">  
  <form method="post" action="loginprocess.php">
    <div class="heading">PLEASE LOGIN</div>
    <table class="find">
      <tr>
        <td>
USER ID
   </td> 
 </tr> 
 <tr>
        <td>
    <input type="text" name="userid"/>
     </td> 
 </tr> 
   <tr>
        <td>
   
   PASSWORD 
   </td> 
 </tr> 
  <tr>
        <td>
    <input type="password" name="password"/>
     </td> 
 </tr> 
  <tr>
        <td>
    <input type="submit" name="submit" value="LOGIN"/>
     </td> 
 </tr> 
 
  </form>
  </div>
 </div>
 </body>
</html>