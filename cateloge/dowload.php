<?php
//echo phpinfo();
$dir = "/var/www/quatgiocongnghiep.com.vn/web /cateloge/Dampers/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>