<?php
include('lib.php');
session_start();

include "connection.php";

$error_message=isset($_GET['error_message'])?$_GET['error_message']:'';
if (isset($_POST['submit'])) {
    if (!empty($_POST['uname']) && !empty($_POST['password'])) {
        $qrys = "SELECT user_id,f_name, l_name, username, email FROM logins WHERE username ='" . $_POST['uname'] . "'  and password = '" . $_POST['password'] . "'";
        $result = mysql_query($qrys, $conn);
        $value = mysql_fetch_object($result);
        if ($value) {
            $_SESSION[session_id()] = $value;
            header("Location: list.php ");
        }else{
            $error_message = 'Wrong username/password combo.';
        }
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
}

?>

<html>
<head>
    <title>login</title>
    <style>


        body {
            background: url('5.jpg') no-repeat fixed center;
            background-size: cover;

        }

        table {
            width: 550px;
            height: 300px;
            padding: 20px;
            background: transparent;
            border-radius: 10px;
            border-bottom: 5px solid black;
            margin: 150px auto;
        }

        .input {
            width: 100%;
            height: 42px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 24px;
            font-family: Montserrat;
            padding: 0 20px 0 50px;
            outline: none;
            background: transparent;
            border: none;
            border-bottom: 3px solid white;

        }

        .btn {
            height: 32px;
            font-size: 15px;
            font-family: Montserrat;
            padding: 0 20px 0 20px;
            margin: 10px;
        }

        .label {
            width: 30%;
        }

        .submit:hover {
            background: transparent;
            color: black;
            font-size: 22px;
        }
    </style>
</head>
<body>

<?=$error_message?>
<form method="post">

    <table border="0">
        <tr>
            <td class="label"><strong>USERNAME</strong></td>
            <td align="center"><input class="input" type="text" name="uname" size="40px"/></td>
        </tr>
        <tr>
            <td class="label"><strong>PASSWORD<strong></td>
            <td align="center"><input class="input" type="password" name="password" size="40px"></td>
        </tr>


        <tr>
            <td colspan="2" align="center"><input class="submit" class="btn" name="submit" type="submit" value="LOGIN"/><a
                    href="signup.php">
                    <button class="submit" class="btn" type="button">SIGN UP</button>
                </a> <a href="forgot.php">
                    <button class="submit" class="btn" type="button">FORGOT PASSWORD</button>
                </a></td>
        </tr>


    </table>

</form>


</body>
</html>




