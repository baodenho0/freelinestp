<?php
session_start();

if (!isset($_SESSION['username'])) {
   header('Location: login.php');
}
?>

<?php 
if(isset($_POST['submit'])) {
	$error = array();
	foreach($_FILES['fileUpload']['name'] as $key=>$value){
		$image_name = $_FILES['fileUpload']['name'][$key];
		$tmp_name = $_FILES['fileUpload']['tmp_name'][$key];

		$target_dir ="img/";
		$target_file= $target_dir.$image_name;
		if($_FILES['fileUpload']['size'][$key] > 5242880){
   $error['fileUpload'] ="chi dc upload duoi 5M";
  }
   $file_type = pathinfo($_FILES['fileUpload']['name'][$key], PATHINFO_EXTENSION);
   //echo $file_type;
   $file_type_allow= array('png','jpg','jpeg');
   if(!in_array(strtolower($file_type),$file_type_allow)){
      $error['fileUpload']="chi duoc upload file anh";
   }
   //print_r($error);
   if(empty($error)){
		move_uploaded_file($tmp_name,$target_file);
		echo "upload thanh cong ".$target_file ."<br>";
    echo "";
	}
	else {
		print_r($error);
	}
	}
}

 ?>
<a href="admin.php">Back</a>



<!-- <html>
  <head>
    <title>upload</title>
    <meta charset="utf8">
  </head>
  <body>
    <div id="content">
      <h1>Upload </h1>
      <form  id="form_upload" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileUpload[]" id="fileUpload" multiple="" accept=".jpg,.png">
        <br>
        <br>
        <input type="submit" name="submit">

      </form>
    </div>
  </body>

</html>
 -->