<?php
include("../log-in/session_handling.php");
include("../log-in/db.php");
include("../log-in/queries.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $username = $_POST["name"];
  $firstName = $_POST["firstname"];
  $lastName = $_POST["lastname"];
  $email = $_POST["email"];
  $confirmEmail = $_POST["confirm-email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm-password"];
  

  //users should have unique usernames? -- yess
  if(get_username_exist($username) == $username){
    redirect("./sign-up.php", "There already exist a user with that username!");
  }else if(strlen($username) > 15){
    redirect("./sign-up.php", "Username can only be 15 chars long!");
  }else if(strlen($password) > 15){
    redirect("./sign-up.php", "Password can only be 15 chars long!");
  }else if($confirmEmail != $email){
    redirect("./sign-up.php", "Emails do not match!");
  } else if($confirmPassword != $password){
    redirect("./sign-up.php", "Passwords do not match!");
  }else {
      if (register($username, $firstName, $lastName, $email, $password)) {
        redirect("../log-in/log-in.php", "Registration succeeded. You may now log in.");
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

  <link rel="stylesheet" href="../nav-bar.css">
  <link rel="stylesheet" href="./sign-up.css">

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
        <div id="error-msg">
            <?php if(isset($_SESSION["flash"])) { ?>
        <p><?= $_SESSION["flash"] ?></p>
        <?php unset($_SESSION["flash"]);
        } ?>

        <div class="form-style-3">
          <form action= "./sign-up.php" method="POST">
            <fieldset><legend>Sign Up</legend>
              <label for="name"><span>Username <span class="required">*</span></span><input type="text" class="input-field" name="name" value="" required/></label>
              <label for="firstname"><span>First Name <span class="required">*</span></span><input type="text" class="input-field" name="firstname" value="" required/></label>
              <label for="lastname"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="lastname" value="" required/></label>
              <label for="email"><span>Email <span class="required">*</span></span><input type="email" class="input-field" name="email" value="" /></label>
              <label for="confirm-email"><span>Confirm Email <span class="required">*</span></span><input type="email" class="input-field" name="confirm-email" value="" required/></label>
              <label for="password"><span>Password <span class="required">*</span></span><input type="password" class="input-field" name="password" value="" required/></label>
              <label for="confirm-password"><span>Confirm Password <span class="required">*</span></span><input type="password" class="input-field" name="confirm-password" value="" required/></label>

                <div id= "form-buttons">
                  <input id= "btnSubmit" type= "submit" value="Submit">
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