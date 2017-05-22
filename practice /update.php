


<?php

define('host', 'localhost');
define('user', 'ekta');
define('password', 'ekta');
$conn = mysql_connect('localhost', 'ekta', 'ekta');

if ($conn) {
    echo "connected succesfully" . "</br>";
}
else{
    echo "Not connected ";
}
$db = mysql_select_db('ekta', $conn);


$qry = "UPDATE student SET id='2' WHERE name='anuradha' ";

$result = mysql_query($qry, $conn);

if ($result == 1) {
    echo "Table Upadated Successfully.";
} else {
    echo "Table not updated.";
}

mysql_close($conn);


?>
x