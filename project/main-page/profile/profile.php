<?php
  include("../log-in/session_handling.php");
  include("../log-in/db.php");
  include("../log-in/queries.php");//this is new
  include("../log-in/views.php");
  ensure_logged_in();

  $didUpload = FALSE;
  $newFile = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

  
  $currentDirectory = getcwd();
    $uploadDirectory = "/uploads/";
    $imageUpload;

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

  if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          $newFile = "./uploads/" . $fileName;
          
        } else {
         
          redirect("../main-page.php", "Upload unsuccessful");
        }
      } else {
      
        redirect("../main-page.php", "There were errors when trying to upload");
        }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" > 
  <title>Blink Nation</title>

  <link rel="stylesheet" href="./profile.css">
  <link rel="stylesheet" href="../nav-bar.css">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    

    <div id= "wrapper">
    <header>
        <a href= "../main-page.php"><h1>Blink Nation</h1></a>

        <nav>

              <ul>
              <li>
                  <?php  if (!isset($_SESSION["name"])) { ?>
                    <a class="title-nav" href="../log-in/log-in.php">
                        Log-in/Sign-up</a>
                  <?php } else{?>
                    <a class="title-nav" href="">
                        Welcome, <?= $_SESSION["name"] ?></a>
                    <?php } ?>
                    <ul class="sub-links">
                      <li><a href= "./profile.php">Profile Settings</a></li>
                      <li><a href= "../musicplayer/musicplayer.php">BlackPink Playlist</a></li>
                      <?php  if (isset($_SESSION["name"])) { ?>
                        <li><a href= "../delete/delete.php">Delete Account </a></li>
                        <li><a href= "../log-out/logout.php">Log Out</a></li>
                      <?php } ?>
                    </ul>
                  </li>

                  <li>
                    <a class= "title-nav" href="">Jennie</a>
                    <ul class="sub-links">
                      <li><a href= "../jennie/jennie-info.php">
                        About Jennie Kim</a></li>
                      <li><a href= "../jennie/jennie-everyday.php">Jennie's Everyday Wear</a></li>
                      <li><a href= "../jennie/jennie-performace.php">Jennie's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class="title-nav" href="">Lisa</a>
                    <ul class="sub-links">
                      <li><a href= "../lisa/lisa-info.php">About Lisa Manoban</a></li>
                      <li><a href= "../lisa/lisa-everyday.php">Lisa's Casual Wear</a></li>
                      <li><a href= "../lisa/lisa-performance.php">Lisa's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class= "title-nav" href="">Jisoo</a>
                    <ul class="sub-links">
                      <li><a href= "../jisoo/jisoo-info.php">About Jisoo Kim</a></li>
                      <li><a href= "../jisoo/jisoo-everyday.php">Jisoo's Casual Wear</a></li>
                      <li><a href= "../jisoo/jisoo-performance.php">Jisoo's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class= "title-nav" href="">Rosé</a>
                    <ul class="sub-links">
                      <li><a href= "../rose/rose-info.php">About Rosé Park</a></li>
                      <li><a href= "../rose/rose-everyday.php"> Rosé's Everyday Wear</a></li>
                      <li><a href= "../rose/rose-everday.php">Rosé Performance Wear</a></li>
                      
                    </ul>
                  </li>
              </ul>
        </nav>
    </header>
    
    
        <main>

        <h2><?= $_SESSION["name"]?>'s Profile</h2>
        <div id="upper-profile">
          
        <?php if(!($didUpload)){ ?>
          <div id="islisa-pic">
          <img src="../images/blackpinklogo.jpg" width="350" height="400"/>
          </div>
        <?php } else if($didUpload) { ?>
          <div id="islisa-pic">
            <img src="<?= $newFile?>" width="350" height="400"/>
          </div>
        <?php }?>

          <div id="display-table">
            <?php

              display_profile_table(get_user($_SESSION["name"]));
              
            ?>
          </div>
        </div>

        
        <div class="form-style-3" id="upload-form-profile">
          <form action="./profile.php" method="POST" enctype="multipart/form-data">
            <fieldset><legend>Upload Image</legend>
              <label for="fileToUpload">Image To Upload: <input type="file" class="input-field" name="the_file" id="fileToUpload" /></label>

                <div id= "form-buttons">
                  <input id= "btnSubmit" name= "submit" type= "submit" value="Submit">
                </div>
              </fieldset>
            </form>
        </div>             
      </main>

    </div>
  </body>


  <footer>
  <ul>
      <li><p><a href= "../about-us/about-us.php">About Us</a></p></li>
      <li><p><a href= "../contact-us/contact-us.php">Contact Us</a></p></li>
      <li>  <p>
            <a href="http://validator.w3.org/check/referer" referrerpolicy="unsafe-url">   
                Validate My HTML </a>
        </p></li>
      <li><p>
            <?php $uri = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>
                <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?= $uri ?>" referrerpolicy="unsafe-url">
              Validate My CSS</a>
        </p></li>
  </ul>
  <div id= "disclaimer">
  <p> Disclaimer: This site is under development by UW-Oshkosh students as a prototype for a
              BlackPink Fanpage. Nothing on the site should be construed in any way as being officially
              connected with or representative of BlackPink from YG Entertainment.</p></div>

  </footer>
</html>