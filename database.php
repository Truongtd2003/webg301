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


function insert_product($product) {
  global $db;

  $sql = "INSERT INTO products ";
  $sql .= "(category_id, product_name, description, price, material, image_url, origin) ";
  $sql .= "VALUES (";
  $sql .= "'" . $product['category'] . "',"; 
  $sql .= "'" . $product['product_name'] . "',";
  $sql .= "'" . $product['description'] . "',";
  $sql .= "'" . $product['price'] . "',";
  $sql .= "'" . $product['material'] . "',";
  $sql .= "'" . $product['image_url'] . "',";
  $sql .= "'" . $product['origin'] . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);

  return confirm_query_result($result);
}

function update_product($product) {
  global $db;
  

  $sql = "UPDATE products SET ";
  $sql .= "category_id='" . $product['category_id'] . "', ";
  $sql .= "product_name='" . $product['product_name'] . "', ";
  $sql .= "description='" . $product['description'] . "', ";
  $sql .= "price='" . $product['price'] . "', ";
  $sql .= "material='" . $product['material'] . "', ";
  $sql .= "image_url='" . $product['image_url'] . "', ";
  $sql .= "origin='" . $product['origin'] . "' ";
  $sql .= "WHERE product_id='" . $product['product_id'] . "' ";
  $sql .= "LIMIT 1";
  
  $result = mysqli_query($db, $sql);

  return confirm_query_result($result);
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


function find_admin_by_email($email){
  global $db;
  $sql = "SELECT * FROM admins WHERE email = '$email' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  confirm_query_result($result);
  $admin = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $admin;
  
}

function find_product_by_id($id) {
  global $db;

  $sql = "SELECT * FROM products WHERE product_id = '" .  $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_query_result($result);
  $product = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $product;
}
function find_all_products(){
  global $db;

  $sql = "SELECT * FROM products";
  $result = mysqli_query($db, $sql);
 
  return confirm_query_result($result);
}


function delete_product($id) {
  global $db;

  $sql = "DELETE FROM products ";
  $sql .= "WHERE product_id='" . $id . "' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  return confirm_query_result($result);

  
}



function verify_login($email, $password)
{
  global $db;
  $sql = "SELECT * FROM admins WHERE email = '$email' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  confirm_query_result($result);
  if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);
    if ($password === $user['hash_password']) {

      return true;
    } else {

      return false;
    }
  } else {

    return false;
  }
}






function delete_category($id) {
  global $db;

  $sql = "DELETE FROM category ";
  $sql .= "WHERE category_id='" . $id . "' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  return $result;
}

function find_category_by_id($id) {
  global $db;

  $sql = "SELECT * FROM category ";
  $sql .= "WHERE category_id='" . $id . "' ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($db, $sql);
  confirm_query_result($result);
  $category = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $category; // Trả về một mảng chứa thông tin về danh mục
}

function find_all_category(){
  global $db;

  $sql = "SELECT * FROM category";
  $result = mysqli_query($db, $sql);
 
  return confirm_query_result($result);
}


function insert_category($category) {
  global $db;

  $sql = "INSERT INTO category ";
  $sql .= "(category_name, image_url) ";
  $sql .= "VALUES (";
  $sql .= "'" . $category['category_name'] . "',";
  $sql .= "'" . $category['image_url'] . "'";
  $sql .= ")";

  $result = mysqli_query($db, $sql);

 

  return confirm_query_result($result);
}
