<?php
require_once '../_includes/config.php';

//pull form info
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
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
$sql = "INSERT INTO users (firstname, lastname, email, username, password)
VALUES (:firstname, :lastname, :username, :email, :password)";


$pdoQuery = $conn->prepare($sql);

//bind values
$pdoQuery->bindValue(":firstname", $firstname, PDO::PARAM_STR);
$pdoQuery->bindValue(":lastname", $lastname, PDO::PARAM_STR);
$pdoQuery->bindValue(":username", $username, PDO::PARAM_STR);
$pdoQuery->bindValue(":email", $email, PDO::PARAM_STR);
$pdoQuery->bindValue(":password", $crypted_password, PDO::PARAM_STR);

//execute
$pdoQuery->execute();

// Last inserted id
$userID = $conn->lastInsertId();

if ($userid > 0)
{
  setcookie("userID", $userID, 0, "/");

  header("Location: success.php");
}

else {
  setcookie("registrationError", "Your registration failed. Please try again.", 0, "/");

  header("Location: index.php");
}





?>
