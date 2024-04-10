<?php
phpinfo();
echo $_GET['a'];

$username = $_POST['username']; 
$password = $_POST['password']; 
$query = "INSERT INTO users (password) VALUES ('$password')"; 
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; 
$result = mysql_query("SELECT * FROM users"); 

setcookie('session_id', $session_id); 
