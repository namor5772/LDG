<!DOCTYPE html>
<html lang = "en-US">

  <head>
    <meta charset = "UTF-8">
    <title>Lidia Duda-Groblicka</title>
    <link rel = "stylesheet" type = "text/css" href = "main.css" />
    <script type = "text/javascript" src = "jquery.js"></script>
    <script type = "text/javascript">
      $(init);
      function init(){
        $("#body").load("index_body.html");
        $("#footer").load("index_footer.html");
      } // end init
    
    </script>
  </head>


  <body>
    
<?php
  $my_input = 'LDG1.jpg';
  $my_output = 'LDG1_thumb.jpg';

  function thumbnail_box($img_in_name, $img_out_name, $box_w, $box_h, $quality) {

    $img = imagecreatefromjpeg($img_in_name);

    //create the image, of the required size
    $new = imagecreatetruecolor($box_w, $box_h);
    
    if($new === false) {
        //creation failed -- probably not enough memory
        return null;
    }

    //Fill the image with a light grey color
    //(this will be visible in the padding around the image,
    //if the aspect ratios of the image and the thumbnail do not match)
    //Replace this with any color you want, or comment it out for black.
    //I used grey for testing =)
    $fill = imagecolorallocate($new, 255, 255, 255);
    imagefill($new, 0, 0, $fill);

    //compute resize ratio
    $hratio = $box_h / imagesy($img);
    $wratio = $box_w / imagesx($img);
    $ratio = min($hratio, $wratio);

    //if the source is smaller than the thumbnail size, 
    //don't resize -- add a margin instead
    //(that is, dont magnify images)
    if($ratio > 1.0)
        $ratio = 1.0;

    //compute sizes
    $sy = floor(imagesy($img) * $ratio);
    $sx = floor(imagesx($img) * $ratio);

    //compute margins
    //Using these margins centers the image in the thumbnail.
    //If you always want the image to the top left, 
    //set both of these to 0
    $m_y = floor(($box_h - $sy) / 2);
    $m_x = floor(($box_w - $sx) / 2);

    //Copy the image data, and resample
    //
    //If you want a fast and ugly thumbnail,
    //replace imagecopyresampled with imagecopyresized
    if(!imagecopyresampled($new, $img,
        $m_x, $m_y, //dest x, y (margins)
        0, 0, //src x, y (0,0 means top left)
        $sx, $sy,//dest w, h (resample to this size (computed above)
        imagesx($img), imagesy($img)) //src w, h (the full size of the original)
    ) {
        //copy failed
        imagedestroy($new);
        return null;
    }
    
    // finally create image with set quality
    imagejpeg($new, $img_out_name, $quality);
    
    // free memory used
    imagedestroy($img);
    imagedestroy($new);
    
    //copy successful
    return 1;
  }

//  $r = thumbnail_box($my_input, $my_output, 400, 200, 100);
//  echo $r;
//  echo "<br>";
  
  $dirRIM = 'rmgimages';
  $dirIM = 'images';
  $arr = scandir($dirRIM);
  foreach ( $arr as $fname) {
    if (($fname != '.') && ($fname != '..')) {
      $finp = $dirRIM.'/'.$fname;
      $fout = 'thumbnails/'.$fname;
      copy($finp, $dirIM.'/'.$fname);    
      $r = thumbnail_box($finp, $fout, 200, 200, 100);
    } 
  }
?>

    <div id ="head">
      <h1>Lidia Duda-Groblicka</h1>
      <div class = "menu">
        <ul>
          <li><a href = "index.php" class="active">Home</a></li>
          <li><a href = "art.php">Art</a></li>
          <li><a href = "autobiography.php">Autobiography</a></li>
        </ul>
      </div>
    </div>

   <div id = "container">
     <img src="LDG1.jpg" alt="LDG1.jpg" width="100%" >
   </div>
      
    <div id = "body">
    </div>
    <!-- end body div -->

    <div id = "footer">
    </div>
    <!-- end footer div -->

  </body>
  
</html>
