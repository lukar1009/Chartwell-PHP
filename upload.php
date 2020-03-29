<?php 

require "connection.php";

$title = $_POST['content_title'];
$subtitle = $_POST['content_subtitle'];
$description = $_POST['content_description'];
$year = $_POST['year'];
$subject = $_POST['subject'];

//video
$video_name = $_FILES['file']['name'];
$video_temp = $_FILES['file']['tmp_name'];

move_uploaded_file($video_temp, "upload/".$video_name);
$sql = "insert into lessons values (NULL, '$title', '$subtitle', '$description', '$year', '$subject', '$video_name')";
$query = mysqli_query($db, $sql);
if($query){
    header('Location: content_upload.php?uploaded=1');
}else{
    header('Location: content_upload.php?error=1');
}
?>