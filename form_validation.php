<?php 
session_start();
require "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from users where username = '$username' and password = '$password'";
$query = mysqli_query($db, $sql);

$user = mysqli_fetch_assoc($query);
// echo "<pre>";
// var_dump($user['id']);
// echo "</pre>";
if($user['id']){
    $_SESSION['id'] = $user['id'];
    $_SESSION['firstName'] = $user['firstName'];
    $_SESSION['lastName'] = $user['lastName'];

    if($user['administrator'] == "1"){
        //1 - true, 0 - false
        $_SESSION['admin'] = $user['administrator'];
    }

    // echo "<pre>";
    // var_dump($_SESSION['admin']);
    // echo "</pre>";
        
    header('Location: welcome_page.php');
}else{
    header('Location: index.php?error=1');
}

?>