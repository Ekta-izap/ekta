
<?php


define('host', 'localhost');
define('user', 'ekta');
define('password', 'ekta');
$conn = mysql_connect('localhost', 'ekta', 'ekta');


$db = mysql_select_db('ekta', $conn);

$qry = "SELECT * FROM persons";

$result = mysql_query($qry, $conn);
if(! $result ) {
    die('Could not get data: ' . mysql_error());
}


while($data = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo " ID :{$data['id']}  <br> ".
        " NAME : {$data['f_name']} <br> ".
        " Lname : {$data['l_name']} <br> ".
        " percentage : {$data['percentage']} <br> ".
        " grade : {$data['grade']} <br> ".
        "--------------------------------<br>";
}


mysql_close($conn);
//}
?>
