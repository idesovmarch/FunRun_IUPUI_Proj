<?php
include '../_includes/config.php';

//pull form info
$username = $_POST["username"];
$password = $_POST["password"];

//password encryption
$crypted_password = crypt($password, "21500");

//DB Connection
$dsn = "mysql:dbname=brhammer_funrun_db";
$DBusername = "brhammer";
$DBpassword = "Illian8*";

try {

  $conn = new PDO($dsn, $DBusername, $DBpassword);
}
catch(PDOException $e) {

}

// set query
$sql = "SELECT * FROM users WHERE username=:username AND
password=:password LIMIT 1";


$pdoQuery = $conn->prepare($sql);

//bind values
$pdoQuery->bindValue(":username", $username, PDO::PARAM_STR);
$pdoQuery->bindValue(":password", $crypted_password, PDO::PARAM_STR);

//execute
$pdoQuery->execute();

//fetch row
$row = $pdoQuery->fetch(PDO::FETCH_ASSOC);

if (is_array($row))
{
  setcookie("userID", $row["id"], 0, "/");

 header("Location: success.php");
}

else {
  setcookie("loginError", "Your username or password was invalid", 0, "/");

  header("Location: index.php");
}



?>
