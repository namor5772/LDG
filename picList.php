<?php
$dir    = 'images';
$arr = scandir($dir);
foreach ( $arr as $fname) {
  if (($fname != '.') && ($fname != '..')) {
  print <<< HERE
    <option value = "$fname">$fname</option>
HERE;
  } 
}
?>