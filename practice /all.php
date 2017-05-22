<?php

define('host', 'localhost');
define('user', 'ekta');
define('password', 'ekta');
define('database', 'ekta');
$conn = mysql_connect('localhost', 'ekta', 'ekta','ekta');
$id="";
$fname="";
$lname="";
$age="";



function getposts()
{
    $posts = array();
    {
        $posts[0] = $_POST['id'];
        $posts[1] = $_POST['fname'];
        $posts[2] = $_POST['lname'];
        $posts[3] = $_POST['age'];
    }

    return $posts;
}
    if(isset($_POST['search']))
    {
       $data=getposts();
        $seacrh_query="SELECT * FROM student WHERE id=$data[0]";
    }
$result=mysql_query($seacrh_query,$conn);
if($result) {
    if (mysql_num_rows($result))
    {
        while ($row = mysql_fetch_array($result)) ;
    {
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];

    }
}
else{
    echo 'no data for this id';
}

else{
        echo 'reslut error';
    }
}



?>
<html>
<head>
    <title>
        all in one
    </title>
</head>
<body>

<form action="all.php" method="POST">
    <input type="number" name="id" placeholder="Enter id" value="<?php echo "$id"?>"><br><br>
    <input type="text" name="fname" placeholder="First Name" value="<?php echo "$fname"?>"><br><br>
    <input type="text" name="lname" placeholder="Last Name" value="<?php echo "$lname"?>"><br><br>
    <input type="number" name="age" placeholder="Enter Age" value="<?php echo "$age"?>"><br><br>
    <div>
        <input type="submit" name="insert" value="ADD">
        <input type="submit" name="update" value="UPDATE">
        <input type="submit" name="delete" value="DELETE">
        <input type="submit" name="search" value="FIND">
    </div>
</form>
</body>
</html>