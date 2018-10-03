<?php 
$con = mysqli_connect("localhost","root","","freelinestp") or die("lỗi kết nối");
mysqli_set_charset($con, 'UTF8');
if($con)
{
	echo("<script>console.log('kết nối thành công! ');</script>");
}

 ?>
