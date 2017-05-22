<html>
<body>
<a href="createtableform.php"> Click Here to Create a New Table</a>
<?php

define('host', 'localhost');
define('user', 'ekta');
define('password', 'ekta');
$conn = mysql_connect('localhost', 'ekta', 'ekta');


$db = mysql_select_db('ekta', $conn);


//$qry="CREATE TABLE $_POST[tname]($_POST[col1] $_POST[dtype1]$_POST[dsize1] $_POST[const1] $_POST[col2] $_POST[dtype2]$_POST[dsize2] $_POST[const2] $_POST[col3] $_POST[dtype3]$_POST[dsize3] $_POST[const3] $_POST[col4] $_POST[dtype4] $_POST[dsize4] $_POST[const4])";
$qry="CREATE TABLE $_POST[tname](id int(11) PRIMARY KEY ,e_name varchar(255) NOT NULL ,department varchar(255) NOT NULL ,salary int(10) NOT NULL )";
print_r($qry); mysqli_connect_error(); 
$result=mysql_query($qry,$conn);
if($result){
    echo "Your Table Created Successfully";
}
else{
    echo" Wrorng Input";
    mysql_error($conn);
}



?>
</body>

</html>

<!--$qry = "CREATE TABLE logins(id int NOT NULL AUTO_INCREMENT ,name VARCHAR(255) NOT NULL , place VARCHAR(255) NOT NULL, primary key(id) )";-->