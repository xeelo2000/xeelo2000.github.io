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

  <link rel="stylesheet" href="./lisa-info.css">
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
                      <li><a href= "../jennie/jennie-performace.php">Jennie's Performance Wear</a></li>
                      
                    </ul>
                    </li>

                    <li>
                    <a class="title-nav" href="">Lisa</a>
                    <ul class="sub-links">
                      <li><a href= "./lisa-info.php">About Lisa Manoban</a></li>
                      <li><a href= "./lisa-everyday.php">Lisa's Casual Wear</a></li>
                      <li><a href= "./lisa-performance.php">Lisa's Performance Wear</a></li>
                      
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
            <h2>Lisa Manoban</h2>

            <p class= "paragraphs"> LaLisa Manoban was born in Bankok, Thailand, known as Lisa, one of the four members from BlackPink and a soloist. </p>
            
            <h3> 1997-2011: Early-Life </h3>
            <p class="paragraphs"> Lisa's birthname is Pranpriya Manoban and she later legally changed it to LaLisa Manoban after a 
              fortune teller told her she will recieve good luck if her name was changed to LaLisa. 
              Lisa was born and raised in Thailand and the only non-Korean member in BlackPink. 
              Her stepfather is Marco Bruschweiler, a well-known Swiss chef. At a young age, Lisa
               has been modeling and dancing which led her to audition for the YG Entertainment 
               Competition in 2010. She was 13 years old when she got first place at the audtion 
               and left to train in South Korea for 5 years.  </p>

            <h3> 2011-2015: Early-Career </h3>
            <p class="paragraphs"> Lisa was only mentioned once in 2013 when YG Entertainment 
              was planning to create a different girl group called Pink Punk, which never debuted. 
              At that time, there was a dance video released of a girl and her name was never released to the public. 
              However, there was a photo that was posted and later in 2016 it was confirmed that girl was Lisa. </p>

              <h3>2016-Present: BlackPink and Solo Debut </h3>
              <p class="paragraphs">On August 8, 2016, Lisa becomes one of the four members in BlackPink, 
                as the lead rapper and main dancer. She is also an Celine brand ambassador. On September 6, 
                2021 Lisa released a mini alblum that consists of 2 songs, "LaLisa", and "Money". 
                Both of the songs recieved great feedback and "Money" made it to the Top 100 Songs on BillBoard. 
          </div>  

          <div id="lisa-pic">
          <img src="../images/lisalovesick.jpg" width="350" height="400"/>
          </div>

          <div id = "table">
          <table>
                
                <tr>
                    <th>Birth Name:</th>
                    <td>Pranpriya Manoban, LaLisa Manoban</td>
                </tr>

                <tr>
                    <th>Hangul:</th>
                    <td>리사</td>
                </tr>

                
                <tr>
                    <th>Thai:</th>
                    <td>ปราณปริยา มโนบาล</td>
                </tr>

                <tr>
                    <th>Birth-Place:</th>
                    <td>Buriram province, Thailand</td>
                </tr>

                <tr>
                    <th>Birthday:</th>
                    <td>March 27, 1997 (age 24)</td>
                </tr>

                <tr>
                    <th>Height:</th>
                    <td>167 cm (5'5 3/4")</td>
                </tr>

                <tr>
                    <th>Weight:</th>
                    <td>44 kg (97 lbs)</td>
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