<?php

function insert_user($name, $firstName, $lastName, $email, $password) {
  global $db;

  try {
    $query = "INSERT INTO AddUser(Username, FirstName, LastName, Email, Passwordd) VALUES (?,?,?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $firstName, $lastName, $email, $password]);
    return $db->lastInsertId();
  } catch (PDOException $e) {
      db_disconnect();
      exit("Aborting: There was a database error when inserting a new users.");
  }
}

function get_all_users() {
  global $db;

  try {
    $query = "SELECT UserId, Username, FirstName, LastName, Email FROM AddUser";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    var_dump($e);
    // db_disconnect();
    // exit("Aborting: There was a database error when getting existing users.");
  }
}

function get_user($id) {
  global $db;

  try {
    $query = "SELECT FirstName, LastName, Email FROM AddUser WHERE Username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$id]);
    return  $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  } catch (PDOException $e) {
    // var_dump($e);
    // db_disconnect();
    exit("Aborting: There was a database error when getting existing users.");
  }
}


function get_username_exist($username) {
  global $db;
  $userExist = FALSE;

  
    $query = "SELECT Username FROM AddUser WHERE Username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    
    if ($stmt) {
      foreach ($stmt as $row) {
        $findUser = $row["Username"];
        
        $userExist = $findUser === $username;
        
      }
    }
  
    return $userExist;
}

function get_userid($username) {
  global $db;

  try {
    $query = "SELECT UserId FROM AddUser WHERE Username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    return  $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
  } catch (PDOException $e) {
    var_dump($e);
    // db_disconnect();
    // exit("Aborting: There was a database error when getting existing users.");
  }
}

?>