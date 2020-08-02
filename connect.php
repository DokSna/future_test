<?php
$driver   = 'mysql';
$host     = "localhost";
$db_name  = "valikov_future";
$db_user  = "root";
$db_pass  = "";
$charset  = 'utf8';
$options  = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
  $connect = new
    PDO(
      "$driver:host=$host;dbname=$db_name;charset=$charset",
      $db_user,
      $db_pass,
      $options
    );
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
