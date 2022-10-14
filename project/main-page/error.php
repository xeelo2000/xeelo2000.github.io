<?php
include("./log-in/session_handling.php");
include("./log-in/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" > 
  <title>Blink Nation</title>

  <link rel="stylesheet" href="error.css">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    

    <div id= "wrapper">
    <header>
        <a href= "main-page.php"><h1>Blink Nation</h1></a>

        <nav>
            <!-- <div id="menu-button">
                <svg viewBox="0 0 100 80" width="30" height="30">
                  <rect fill="white" width="100" height="15"></rect>
                  <rect fill="white" y="30" width="100" height="15"></rect>
                  <rect fill="white" y="60" width="100" height="15"></rect>
                </svg>
              </div> -->

              <ul>
              <li>
                  <?php  if (!isset($_SESSION["name"])) { ?>
                    <a class="title-nav" href="./log-in/log-in.php">
                        Log-in/Sign-up</a>
                  <?php } else{?>
                    <a class="title-nav" href="">
                        Welcome, <?= $_SESSION["name"] ?></a>
                    <?php } ?>
                    <ul class="sub-links">
                      <li><a href= "./profile/profile.php">Profile Settings</a></li>
                      <li><a href= "./musicplayer/musicplayer.php">BlackPink Playlist</a></li>
                      <?php  if (isset($_SESSION["name"])) { ?>
                        <li><a href= "./delete/delete.php">Delete Account </a></li>
                        <li><a href= "./log-out/logout.php">Log Out</a></li>
                      <?php } ?>
                    </ul>
                  </li>

                    <li>
                    <a class="title-nav" href="">Lisa</a>
                    <ul class="sub-links">
                      <li><a href= "./lisa/lisa-info.php">About Lisa Manoban</a></li>
                      <li><a href= "./lisa/lisa-everyday.php">Lisa's Casual Wear</a></li>
                      <li><a href= "./lisa/lisa-performance.php">Lisa's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class= "title-nav" href="">Jisoo</a>
                    <ul class="sub-links">
                      <li><a href= "./jisoo/jisoo-info.php">About Jisoo Kim</a></li>
                      <li><a href= "./jisoo/jisoo-everyday.php">Jisoo's Casual Wear</a></li>
                      <li><a href= "./jisoo/jisoo-performance.php">Jisoo's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class= "title-nav" href="">Rosé</a>
                    <ul class="sub-links">
                      <li><a href= "./rose/rose-info.php">About Rosé Park</a></li>
                      <li><a href= "./rose/rose-everyday.php"> Rosé's Everyday Wear</a></li>
                      <li><a href= "./rose/rose-everday.php">Rosé Performance Wear</a></li>
                      
                    </ul>
                  </li>
              </ul>
        </nav>
    </header>
        
    <main>

        <div id="error-msg">
            <?php if(isset($_SESSION["flash"])) { ?>
        <p><?= $_SESSION["flash"] ?></p>
        <?php unset($_SESSION["flash"]);
        } ?>

        <img src= "./images/blackpinkbye.gif" width = 650 height = 350>

    </main>
  </div>
</body>

<footer>
  <ul>
      <li><p><a href= "./about-us/about-us.php">About Us</a></p></li>
      <li><p><a href= "./contact-us/contact-us.php">Contact Us</a></p></li>
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