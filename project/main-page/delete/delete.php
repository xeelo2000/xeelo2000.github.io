<?php 

require_once("../log-in/session_handling.php");
require_once("../log-in/db.php");

  global $db;
  $username = $_SESSION["name"];

  try {
    $query = "DELETE FROM AddUser WHERE Username= ?";
    $statement = $db->prepare($query);
    $params = [ $username ];
    $statement->execute($params);
  } catch (PDOException $e) {
    db_disconnect();
    exit("Aborting: There was a database error when getting existing books.");
  }


session_destroy();
session_regenerate_id(TRUE);
session_start();
redirect("../log-in/log-in.php", "Your account has been deleted.");

?>