
<?php


define('host', 'localhost');
define('user', 'ekta');
define('password', 'ekta');
$conn = mysql_connect('localhost', 'ekta', 'ekta');


$db = mysql_select_db('ekta', $conn);

//$sql = "CREATE TABLE pjkhfdfhg(
//    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//    first_name VARCHAR(30) NOT NULL,
//    last_name VARCHAR(30) NOT NULL,
//    email VARCHAR(70) NOT NULL UNIQUE
//)";

$qry = "CREATE TABLE logins(id int NOT NULL AUTO_INCREMENT ,name VARCHAR(255) NOT NULL , place VARCHAR(255) NOT NULL, primary key(id) )";

//$result=mysql_query($conn,$sql);


if(mysql_query($qry, $conn)){
    echo "Table created successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysql_error($conn);
}





?>