<?php


include_once "database.php";

$email = $_POST["email"];
$pass = $_POST["pass"];

$spl = "INSERT INTO users (email,pass) VALUES (?,?)";

$stmt=$pdo->prepare($sql);
$stmt->execute([$email,$pass]);
header(header:"location: users-php");