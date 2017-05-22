<?php

$conn= mysql_connect('localhost','ekta','ekta') or die("Could not connect database");
if($conn){
    $db=mysql_select_db('ekta',$conn);
}