<?php
$sname="localhost";
$uname="username";
$pass="password";
$conn= mysqli_connect($sname,$uname,$pass);
 if ($conn->connet_error){
     die("connection failed:" . $conn->connect_error);
 }
else{
    echo "connected successfuly";
}
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
