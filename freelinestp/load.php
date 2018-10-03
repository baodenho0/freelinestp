<?php 

function load($a){
include 'config.php';

$sql = "SELECT * FROM `baidang` WHERE `baidang`.`id` = $a";
$kt = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($kt)) {

		$GLOBALS['tieude'] =$row[1];
		$GLOBALS['noidung'] =$row[2];

      }
      
     
  }
  function loadlink($a){
  	include 'config.php';

$sql = "SELECT * FROM `link` WHERE `link`.`id` = $a";
$kt = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($kt)) {

		$GLOBALS['link'] =$row[1];
		

      }
      
     

  }


  
  ?>



