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

  <link rel="stylesheet" href="./jennie-info.css">
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
                      <li><a href= "./jennie-info.php">About Jennie Kim</a></li>
                      <li><a href= "./jennie-everyday.php">Jennie's Casual Wear</a></li>
                      <li><a href= "./jennie-performace.php">Jennie's Performance Wear</a></li>
                      
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
            <h2>Jennie Kim</h2>

            <p class= "paragraphs"> Jennie Kim was born in Seoul, South Korea, known as Jennie, one of the four members from BlackPink and a soloist.</p>
            
            <h3> 1996-2010: Early-Life </h3>
            <p class="paragraphs"> Jennie Kim is the only child of her parents. Her mother is a CJ & M director and her father owns a hostipal. 
              At the age of 7, Jennie moved from South Korea to Auckland, New Zealand where she spent 5 years as a student at ACG Parnell College. 
              During her time studying abroad, she was able to learn and speak english. </p>

            <h3> 2010-2015: Early-Career </h3>
            <p class="paragraphs"> Around 2010, Jennie decides to move back to South Korea to pursue her dream as an idol instead of going to America to study in Florida. 
              At this time, Jennie was around 12 years old and was able to successfully win a place in the YG audition the same year. 
              During the six years she trained at YG, she was featured and appeared in some of her labelmates songs.
              In 2013, she appears in a music video with her lablemate, G-Dragon, called "That XX". At this time, Jennie was 16 years old and this was her first appearance to the media.</p>

              <h3>2016-Present: BlackPink and Solo Debut </h3>
              <p class="paragraphs">On August 8, 2016, she became the main rapper and lead vocalist for the girl group, BlackPink, which debuted on August 8, 2016. She is still 
                an active memeber of the group and continues to perform around the world. In 2018, she released her first single called 
                "Solo." This song was a success as it hit #1 in South Korea from the moment it was released. Jennie is also a 
                Chanel ambassador and gets invited to special events and covers their magazines. She is well-known as a fashion icon 
                and an idol. 
              </p>
          </div>  

          <div id="jennie-pic">
          <img src="../images/jennielovesick.jpg" width="350" height="400"/>
          </div>

          <div id = "table">
          <table>
                
                <tr>
                    <th>Birth Name:</th>
                    <td> Jennie Ruby Jane Kim</td>
                </tr>

                <tr>
                    <th>Hangul:</th>
                    <td>김제니</td>
                </tr>

                <tr>
                    <th>Birth-Place:</th>
                    <td>Cheongdam- dong, Gangnam District, South Korea</td>
                </tr>

                <tr>
                    <th>Birthday:</th>
                    <td>January 16, 1996 (age 25)</td>
                </tr>

                <tr>
                    <th>Height:</th>
                    <td>163 cm (5'4")</td>
                </tr>

                <tr>
                    <th>Weight:</th>
                    <td>48 kg (105 lbs)</td>
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