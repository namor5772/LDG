<!DOCTYPE html>
<html lang = "en-US"> 

  <head>
    <meta charset = "UTF-8">
    <title>Lidia Duda-Groblicka *</title>
    <link rel = "stylesheet" type = "text/css" href = "main.css" />
    <script type = "text/javascript" src = "jquery.js"></script>
    <script type = "text/javascript">
      $(init);
      function init(){
        $("#picList").load("picList.php");
        $("#container2").load("showPicThumbs.php");
        $("#footer").load("art_footer.html");
      } // end init
      
      function showPic(){
        PicID = $("#picList").val();
        $("#pic").load("showPic.php", {"PicID": PicID});
      } // end showPic
      
    </script>
  </head>
  
  <body>
     
    <div id ="head">
      <h1>Lidia Duda-Groblicka</h1>
      <div class ="menu">
        <ul>
          <li><a href = "index.php">Home</a></li>
          <li><a href = "art.php" class="active">Art</a></li>
          <li><a href = "autobiography.php">Autobiography</a></li>
        </ul>
      </div>
    </div>
    
<!--   
    <div id = "body">  
      <label>Select Picture:</label>
      <select id = "picList" onchange = "showPic()">
      </select>
    </div>
 -->   
    <!-- end picList select -->
 
    <div id = "pic">   
    </div>
    <!-- end pic div -->


    <div id = "container1">
 <!--     
      <a href="detailsPic.php?name=images/157085.jpg">
        <img src="images/157085.jpg" alt="157085.jpg" width="24%" >
      </a>
      <a href="images/157179.jpg">
        <img src="images/157179.jpg" alt="157179.jpg" width="24%" >
      </a>
      <a href="images/157180.jpg">
        <img src="images/157180.jpg" alt="157180.jpg" width="24%" >
      </a>
     <img src="images/157181.jpg" alt="157181.jpg" width="24%" >
     <img src="images/157182.jpg" alt="157182.jpg" width="24%" >
     <img src="images/157198.jpg" alt="157198.jpg" width="24%" >
 -->    
    </div>


   <div id = "container2">
   </div>
    <!-- end container2 div -->


    <div id = "footer">
    </div>
    <!-- end footer div -->
    
  </body>
  
</html>
