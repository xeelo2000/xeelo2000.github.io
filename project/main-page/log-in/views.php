<?php

function display_profile_table($profile) { ?>
  <p><span class=bolded>First Name:</span> <?= $profile['FirstName'] ?></p>
  <p><span class=bolded>Last Name:</span> <?= $profile['LastName'] ?></p>
  <p><span class=bolded>Email:</span> <?= $profile['Email'] ?></p>
  <p><a href="../profile/updateprofile.php?Username=<?= $_SESSION['name'] ?>">Update</a></p>
<?php
}
?>
