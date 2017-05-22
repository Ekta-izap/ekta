<?php
session_start();
include ('connection.php');
include('lib.php');
$user_object = gateway();
// verify user if he is logged in

// verify if user is owner of that post. && delete that blog.
$qry = " DELETE FROM blog WHERE blog_id= {$_GET['blog_id']} and user_id = {$user_object->user_id}";
$result = mysql_query($qry, $conn);
if($result){
    header("location:list.php");
}
?>

