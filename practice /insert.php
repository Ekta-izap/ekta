<html>
<head>
    <title>
        insertform
    </title>
</head>
<body>
<form action="insert.php" method="POST">


                STU_ID: <input class="f" type="text" name="id" placeholder="Enter your id"><br>

                NAME: <input class="f" type="text" name="name" placeholder="Enter your name"><br>

                ADDRESS: <input class="f" type="text" name="addess" placeholder="Enter your address"><br>

                CONTACT: <input class="f" type="text" name="contact" placeholder="Enter your contact"><br>

                CITY: <input class="f" type="text" name="city" placeholder="Enter your city"><br>

                    <input type="submit" name="submit" value="submit">


</form>



<?php
if (isset($_POST['submit'])) {


    define('host', 'localhost');
    define('user', 'ekta');
    define('password', 'ekta');
    $conn = mysql_connect('localhost', 'ekta', 'ekta');


    $db = mysql_select_db('ekta', $conn);
//    $qry = 'INSERT INTO student( ,name,addess,contact,city ) VALUES($_POST["id"],$_POST["name"],$_POST["address"],$_POST["contact"],$_POST["city"])';
    $qry = "INSERT INTO student(id,name, address, contact,city) VALUES ($_POST[id],'$_POST[name]', '$_POST[address]', '$_POST[contact]','$_POST[city]')";

    $result = mysql_query($qry, $conn);
    if ($result == 1) {
        echo "table created successfully";
    } else {
        echo "cannot connect";
    }

    mysql_close($conn);

}

?>

</body>
</html>
