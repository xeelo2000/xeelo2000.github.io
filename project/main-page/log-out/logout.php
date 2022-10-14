<?php
require_once("../log-in/session_handling.php");
require_once("../log-in/db.php");

session_destroy();
session_regenerate_id(TRUE);
session_start();
redirect("../log-in/log-in.php", "Logout successful.");
?>
