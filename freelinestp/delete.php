

<?php
session_start();

if (!isset($_SESSION['username'])) {
   header('Location: login.php');
}
else {
function rmdir_recurse($path) {
  $path = rtrim($path, '/') . '/';
  $handle = opendir($path);
 
  while (false !== ($file = readdir($handle))) {
    if($file != '.' and $file != '..' ) {
      $fullpath = $path.$file;
      if (is_dir($fullpath)) rmdir_recurse($fullpath);
      else unlink($fullpath);
    }
  }
  closedir($handle);
  //rmdir($path);
  echo "Xóa thành công";
}
rmdir_recurse("img");
}

?>

