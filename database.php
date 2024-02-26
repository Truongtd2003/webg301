<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "handicraft");


function db_connect()
{
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  return $connection;
}

$db = db_connect();

function db_disconnect($connection)
{ //call at the end of each page
  if (isset($connection)) {
    mysqli_close($connection);
  }
  return $connection;
}


function confirm_query_result($result)
{
  global $db;
  if (!$result) {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  } else {
    return $result;
  }
}



function find_all_admin()
{
  global $db;

  $sql = "SELECT * FROM admins ";
  $sql .= "ORDER BY username";
  //echo $sql;
  $result = mysqli_query($db, $sql);
  // For SELECT statements, $result is a set of data
  return $result;
}


function update_admin($admin)
{
  global $db;
  $hashed_password = hash('sha256', $admin['hash_password']);


  $sql = "UPDATE admins SET ";
  $sql .= "username='" . $admin['username'] . "', ";
  $sql .= "hash_password='" . $hashed_password . "', ";
  $sql .= "email='" . $admin['email'] . "' ";
  $sql .= "WHERE admin_id='" . $admin['admin_id'] . "' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  return confirm_query_result($result);
}

function find_admin_by_id($id)
{
  global $db;

  $sql = "SELECT * FROM admins ";
  $sql .= "WHERE admin_id='" . $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_query_result($result);
  $admin = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $admin; // returns an assoc. array
}


function redirect_to($location)
{
  header("Location: " . $location);
  exit;
}

function verify_login($email, $password)
{
  global $db;
  $sql = "SELECT * FROM admins WHERE email = '$email' AND hash_password = '$password'";
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) === 1) {
    return true;
    
  } else {
    return false;
  }
}
