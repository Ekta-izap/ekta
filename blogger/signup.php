
<?php
session_start();

include "connection.php";

if (isset($_POST['submit'])) {
//    print_r($_POST); exit;
    $qryi = "INSERT INTO logins(f_name,l_name,username,email,password) VALUES('$_POST[f_name]','$_POST[l_name]','$_POST[u_name]','$_POST[eid]','$_POST[password]')";
    if (mysql_query($qryi, $conn)) {
      echo '<script language="javascript">';
        echo 'alert("***YOU ARE REGISTERED SUCCESSFULLY***")';
        echo '</script>';
    }


}
?>



<html>
<head>
    <title>sign up</title>
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
            margin: 150 auto;
        }


        .input{
            width: 100%;
            height: 42px;
            background: transparent;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 24px;
            font-family: Montserrat;
            padding: 0 20px 0 50px;
            outline: none;
            border:none;
            border-bottom: 3px solid white;

        }

        input{
            height: 32px;
            font-size: 15px;
            font-family: Montserrat;
            padding: 0 50px 0 50px;
        }
        .btn{
            height: 32px;
            font-size: 15px;
            font-family: Montserrat;
            padding: 0 50px 0 50px;
            margin:10px;
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
<form method="post">

    <table border="0">
        <tr>
            <td class="label"><strong>FIRST NAME</strong></td>
            <td align="center"><input class="input" type="text" name="f_name" size="40px"/></td>
        </tr>
        <tr>
            <td class="label"><strong>LAST NAME</strong></td>
            <td align="center"><input class="input" type="text" name="l_name" size="40px"/></td>
        </tr>
        <tr>
            <td class="label"><strong>USERNAME</strong></td>
            <td align="center"><input class="input" type="text" name="u_name" size="40px"/></td>
        </tr>
        <tr>
            <td class="label"><strong>EMAIL ID</strong></td>
            <td align="center"><input class="input" type="text" name="eid" size="40px"/></td>
        </tr>

        <tr>
            <td class="label"><strong>PASSWORD<strong></td>
            <td align="center"> <input class="input" type="password" name="password"  size="40px"></input></td>

        </tr>
        <tr>
            <td colspan="2" align="center"><input  class="submit"type="submit" name="submit" value="SUBMIT"/> . <a href="login.php"><button class="submit" class="btn"  type="button">LOGIN</button></a></td>
        </tr>
    </table>

</form>


</body>
</html>




