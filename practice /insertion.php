

<html>
<head>
    <title>
        insertform
    </title>
</head>
<body>
<form action="#" method="POST">


    <input class="f" type="text" name="id" placeholder="Enter your id"><br><br>
    <input class="f" type="text" name="f_name" placeholder="Enter your  first name"><br><br>

    <input class="f" type="text" name="l_name" placeholder="Enter your last name"><br><br>

    <input class="f" type="text" name="percentage" placeholder="percentage"><br><br>

    <input class="f" type="text" name="grade" placeholder="grade"><br>/<br>

    <input type="submit" name="submit" value="submit">


</form>

<?php
if (isset($_POST['submit'])) {


    define('host', 'localhost');
    define('user', 'ekta');
    define('password', 'ekta');
    $conn = mysql_connect('localhost', 'ekta', 'ekta');


    $db = mysql_select_db('ekta', $conn);

    $qry = "INSERT INTO persons(id,f_name, l_name, percentage,grade) VALUES ($_POST[id],'$_POST[f_name]', '$_POST[l_name]', '$_POST[percentage]','$_POST[grade]')";

    $result = mysql_query($qry, $conn);
    if ($result == 1) {
        echo "data inserted successfully";
    } else {
        echo "cannot connect to database";
    }

    mysql_close($conn);
}
?>