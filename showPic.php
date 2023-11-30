<?php
  // get PicID
  $PicID = filter_input(INPUT_POST, 'PicID');
  
  // extracting comment text from pics exif data
  // this was originally pasted into there via MS Windows Properties => Details  
  $exif = exif_read_data('images/'.$PicID, NULL, true, true);
  $comment =  $exif["IFD0"]["Comments"];
  $Acomment = explode("\n", $comment); 

  echo "<br>";
  echo "<img src=images/".$PicID." alt=".$PicID." >";
  echo "<br>";
  echo "<br>";

// EXPAND ON THIS TO DISPLAY DESCRIPTION WITH DETAILED IMAGE OF EACH WORK
//  foreach ($Acomment as $key => $value) {
//    echo $value."<br>";
//    echo "<br>";
//  }
    echo "<br>";
    echo "...";
  
?>