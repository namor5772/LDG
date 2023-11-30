<?php
$dir    = 'thumbnails';
$arr = scandir($dir);
$width = '18%';
foreach ( $arr as $fname) {
  if (($fname != '.') && ($fname != '..')) {
  print <<< HERE
     <a href="detailsPic.php?name=images/$fname"> 
        <img src="thumbnails/$fname" alt="$fname" width="200" >
     </a>       
HERE;
  } 
}
?>