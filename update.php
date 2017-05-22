<?php
session_start();
include ('connection.php');
include('lib.php');
$user_object = gateway();

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $qry = "UPDATE blog  SET title='$title' , description='$description' WHERE blog_id= {$_GET['blog_id']} and user_id = {$user_object->user_id}";

    $result = mysql_query($qry, $conn);
    if ($result) {
        echo "Blog Updated..";
    }
}
?>
<html>
<head>
<title>editing</title>
<style>
    body {
        background: url('5.jpg') no-repeat fixed  center;
        background-size: cover;

    }
    table{
        width: 500px;
        padding: 20px;
        background: transparent;
        border-radius: 10px;
        border-bottom: 5px solid black;
        margin: 150px  auto;
    }
    .btn{
        height: 32px;
        font-size: 15px;
        font-family: Montserrat;
        padding: 0 20px 0 20px;
        margin:10px;
    }

    .input{
        width: 100%;
        height: 42px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        font-size: 24px;
        font-family: Montserrat;Indian Employee
        padding: 0 20px 0 5px;
        outline: none;
        background: transparent;
        border:none;
        border-bottom: 3px solid white;

    }

    input{
        height: 32px;
        font-size: 15px;
        font-family: Montserrat;
        padding: 0 50px 0 50px;
    }
    .label{
        width: 30%;
    }
    .submit:hover{
        background:transparent;
        color:black;
        font-size: 22px;
    }
</style>

</head>
<body>
<form method="POST">
    <table border="0">
        <tr>
            <td class="label"><strong>BLOG TITLE</strong></td>
            <td align="center"><input class="input" type="text" name="title" size="40px"/></td>
        </tr>
        <tr>
            <td class="label"><strong>DESCRIPTION<strong></td>
            <td align="center"> <textarea class="input" name="description" rows="8" cols="40" size="40px"></textarea></td>

        </tr>

        <tr>
            <td colspan="2" align="center"><input class="submit" name="submit" type="submit" value="UPDATE BLOG"/><a href="list.php"><button  class="submit" class="btn" type="button">HOME</button></a></td>
        </tr>
    </table>

</form>
</body>
</html>





