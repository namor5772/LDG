<?php
$name = $_GET['name'];  
// echo $name;
print <<< HERE
  <img src=$name alt=$name height="95%" >
  <p>Artist</p>
  <p>Born: January 28, 1933; Żółkiew, Poland</p>
  <p>Died: February 16, 2012; Adelaide, Australia</p>   
HERE;
?>