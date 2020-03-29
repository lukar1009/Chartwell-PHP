<?php 

require "connection.php";

$first = $_POST['new_firstname'];
$last = $_POST['new_lastname'];
$username = $_POST['new_username'];
$password = $_POST['new_password'];
$prof = $_POST['prof'];

// echo "<pre>";
// var_dump($prof);
// echo "</pre>";

$sql = "insert into users values (NULL, '$first', '$last', '$username', '$password', $prof)";
$query = mysqli_query($db, $sql);

header('Location: register.view.php?registered=1');

?>