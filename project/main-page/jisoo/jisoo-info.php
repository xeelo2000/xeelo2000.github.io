<?php
include("../log-in/session_handling.php");
include("../log-in/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow" > 
  <title>Blink Nation</title>

  <link rel="stylesheet" href="./jisoo-info.css">
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
                      <li><a href= "../profile/profile.php">Profile Settings</a></li>
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
                    <li><a href= "../jennie/jennie-info.php">About Jennie Kim</a></li>
                      <li><a href= "../jennie/jennie-everyday.php">Jennie's Casual Wear</a></li>
                      <li><a href= "../jennie/jennie-performace.php">Jennie Performance Wear</a></li>
                      
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
                      <li><a href= "./jisoo-info.php">About Jisoo Kim</a></li>
                      <li><a href= "./jisoo-everyday.php">Jisoo's Casual Wear</a></li>
                      <li><a href= "./jisoo-performance.php">Jisoo's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class= "title-nav" href="">Rosé</a>
                    <ul class="sub-links">
                      <li><a href= "../rose/rose-info.php">About Rosé Park</a></li>
                      <li><a href= "../rose/rose-everyday.php">Rosé's Casual Wear</a></li>
                      <li><a href= "../rose/rose-performance.php">Rosé's Performance Wear</a></li>
                      
                    </ul>
                  </li>
              </ul>
        </nav>
    </header>
    
    
        <main>

        <div class="grid-container">
          <div id="bio">
            <h2>Jisoo Kim</h2>

            <p class= "paragraphs"> Jisoo Kim was born in Gunpo, South Korea, known as Jisoo, one of the members from BlackPink and an actress. </p>
            
            <h3> 1995-2012: Early-Life </h3>
            <p class="paragraphs"> Jisoo is youngest of three in her family and was raised and born in Korea. </p>

            <h3> 2012-2015: Early-Career </h3>
            <p class="paragraphs"> Jisoo was 16 years old when she was recruited as a trainee at YG Entertainment. 
              She studied at the School Of Performing Arts High School in hopes of becoming an actress. 
              During this time, she appeared in her label-mates music video, Hi SuhYun - "I'm Different" as the female lead.</p>

              <h3>2016-Present: BlackPink and Acting Career </h3>
              <p class="paragraphs">On August 8, 2016, Jisoo becomes one of the four members of BlackPink, 
                as the lead vocalist and visualist with a total of 4 years of training. Jisoo is a Dior Ambassador and 
                continues to attend and promote their events and items.
                In December 2020, it was announced that Jisoo will be having her solo acting debut in a drama called "SnowDrop."
              </p>
          </div>  

          <div id="jisoo-pic">
          <img src="../images/jisoolovesick.png" width="350" height="400"/>
          </div>

          <div id = "table">
          <table>
                
                <tr>
                    <th>Birth Name:</th>
                    <td> Jisoo Kim</td>
                </tr>

                <tr>
                    <th>Hangul:</th>
                    <td> 김지수</td>
                </tr>

                <tr>
                    <th>Birth-Place:</th>
                    <td>Gunpo, Gyeonggi Pronvice, Seoul, South Korea</td>
                </tr>

                <tr>
                    <th>Birthday:</th>
                    <td>January 3, 1995 (age 26)</td>
                </tr>

                <tr>
                    <th>Height:</th>
                    <td>162 cm (5'3 3/4")</td>
                </tr>

                <tr>
                    <th>Weight:</th>
                    <td>45 kg (99 lbs)</td>
                </tr>

                <tr>
                    <th>Years Active:</th>
                    <td>2016 - Present</td>
                </tr>
            </table>
          </div>

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