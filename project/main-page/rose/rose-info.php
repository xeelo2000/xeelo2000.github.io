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

  <link rel="stylesheet" href="./rose-info.css">
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
                      <li><a href= "../lisa/lisa-info.php">About Lisa Manoban</a></li>
                      <li><a href= "../lisa/lisa-everyday.php">Lisa's Casual Wear</a></li>
                      <li><a href= "../lisa/lisa-performance.php">Lisa Performance Wear</a></li>
                      
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
                      <li><a href= "./rose-info.php">About Rosé Park</a></li>
                      <li><a href= "./rose-everyday.php">Rosé's Casual Wear</a></li>
                      <li><a href= "./rose-performance.php">Rosé's Performance Wear</a></li>
                      
                    </ul>
                  </li>
              </ul>
        </nav>
    </header>
    
    
        <main>

        <div class="grid-container">
          <div id="bio">
            <h2>Rose Park</h2>

            <p class= "paragraphs"> Roseanne Park was born in Auckland, New Zealand, 
              known as Rosé, is the main vocalist and lead dancer in BlackPink.</p>
            
            <h3> 1997-2011: Early Life</h3>
            <p class="paragraphs"> Rosé's birth name is Roseanne Park and her korean name is Chaeyoung Park. Her mother is a businesswoman, her father and sister is a lawyer. 
              Rosé is the youngest of two. She was born in Auckland, New Zealand and raised in Mebourne, 
              Australia. Rosé attended Canterbury Grils' Secondary College in Melbourne.</p>

            <h3> 2011-2015: Early-Career </h3>
            <p class="paragraphs"> In 2012, Rosé's father encouraged her to audition for YG Entertainment. 
              Rosé ranked first out of 700 contestants, becoming an YG Entertainment trainee. 
              She left to train in South Korea for 2 years. 
              In 2013, she was featured in her label-mates, "G-Dragon - Without You" 6 months later. </p>

              <h3>2016-Present: BlackPink and Solo Debut </h3>
              <p class="paragraphs">On August 8, 2016, Rosé debuted as one of the members in BlackPink. 
                She is also an Yves Saint Laurent brand ambassdor. On January 25, 2021, 
                Rosé debuted as a solo artist with a mini album that consists with 2 songs, 
                "On The Ground", and "Gone". Both songs recieved good feedback. 
              </p>
          </div>  

          <div id="rose-pic">
          <img src="../images/roselovesick.jpg" width="350" height="400"/>
          </div>

          <div id = "table">
          <table>
                
                <tr>
                    <th>Birth Name:</th>
                    <td> Roseanne Park, Park Chaeyoung (Korean)</td>
                </tr>

                <tr>
                    <th>Hangul:</th>
                    <td>박채영
                      </td>
                </tr>

                <tr>
                    <th>Birth-Place:</th>
                    <td>Auckland, New Zealand
                      </td>
                </tr>

                <tr>
                    <th>Birthday:</th>
                    <td>February 11, 1997 (age 24)</td>
                </tr>

                <tr>
                    <th>Height:</th>
                    <td>168 cm (5'6")</td>
                </tr>

                <tr>
                    <th>Weight:</th>
                    <td>46 kg (101 lbs)</td>
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