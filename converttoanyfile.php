<?php
/*
    @ Name          : converttoanyfile.php
    @ Created Date : 01-08-2009
    @Author       : Naga Subrahmanyam
    @ Description : Export The Query Resultset Data into Excel, HTML, Word Doc, CSV, Text Formats.   
*/
  define("HOSTNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DBNAME", "nps");
 
  mysql_connect(HOSTNAME, USERNAME, PASSWORD) or die(mysql_error());
  mysql_select_db(DBNAME) or die(mysql_error());
 
  $filename="Program";
  if(isset($_POST['convdownload'])) // Clicken On Submit
  {
    ob_start();                                       // Buffer Starts Here
    $filename=$_POST['filename'];                    // File Name
    $filetype=$_POST['filetype'];                   // File Type
    $file = "$filename" . "." . $filetype;         // Full File Name
    @header('Content-type: application/force-download');
    @header('Content-Transfer-Encoding: Binary');
    @header('Content-disposition: attachment; filename='.basename($file));
  }  
 
  /********* Use The Alias Names For Column Names In Report. ****************/
  $selQuery = "SELECT  `pa_ID` as `ID`,`t_barcode` as `Code`,`t_name` as `Program Name`,`d_tapereturnDate` as `Return Date` FROM `programme` limit 10";
  $filedres = mysql_query($selQuery) or die(mysql_error());
?>
<html>
    <head>
        <title>File Preview And Print</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
    </head>
    <body>
        <form name="preview" accept="" method="post">
            <h1 align="center"><?php echo $filename." Report "?> </h1>   <!-- Report Title -->
            <table cellpadding="0" border="1" cellspacing="0" width="100%" style="border-collapse:collapse;margin-bottom:25px;">
                <tr height="25" align="center" style="background-color:green;font-wight:bolder;">
                    <?php  $col = 0;
                        while($col<mysql_num_fields($filedres)) {    // Column Names
                            $meta=mysql_fetch_field($filedres,$col);
                            echo "<td width='25%'  bgcolor='#0176C8' style='border:1px solid black'><strong>". $meta->name . "</strong></td>"; // Appending Column Names to a string
                            $col++;
                        } ?>
                <tr>
                    <?php while($row = mysql_fetch_array($filedres)){   // Data Filling
                            echo "<tr height='20' align='center'>";
                            $data = 0;
                            while($data<mysql_num_fields($filedres)){
                                $meta=mysql_fetch_field($filedres,$data);
                                echo "<td style='border:1px solid black'>" . $row[$meta->name] . "</td>";
                                $data++;
                            } ?> 
                </tr>
                      <?php } ?>    
            </table>
            <?php if(!isset($_POST['convdownload'])) { ?>   
            <fieldset>
                <legend style="font-weight:bold;color:blue;" >Download Options </legend>
                    File Name <input type="text"  name="filename" value="Program"> &nbsp;&nbsp;
                    File Type <select name="filetype" id="filetype">
                                        <option value="xls" selected="selected">Excel</option>
         </select>
       </fieldset>
       </form>
     </body>
     </html>