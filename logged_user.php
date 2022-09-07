<?php
$authuser=0;
$authuser=$_SESSION['authuser'];
if(!$authuser ==1){
          echo '<style type="text/css">';
          echo '.warning{';
          echo 'width:100%;';
          echo 'font-size: 40px;';
          echo 'background-color:Red;';
          echo 'color: white;';
          echo ' text-align: center;';
          echo '}';
          echo '  </style>';
          echo '<div class="warning">';
          echo 'Sorry Mr  ' . $authuser . ', you don\'t have permission to view this page!';
          echo '</div>';
          //include "stop.php";
          include 'index.php';
          //exit();     
        
      }
?>