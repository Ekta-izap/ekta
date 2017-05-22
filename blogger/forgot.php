

<?php
session_start();

include "connection.php";

if (isset($_POST['submit'])) {


    $qrys = "SELECT password FROM logins WHERE email='$_POST[eid]' ";

    $result=mysql_query($conn, $qrys);
    $result1 = mysql_query($qrys);
    $value = mysql_fetch_object($result1);

    if ($value->password) {
        echo '<script language="javascript">';
        echo 'alert("YOUR PASSWORD WAS '. $value->password .'")';
        echo '</script>';
//        echo "YOUR PASSWORD WAS $value->password";
    }


}

?>





<html>
<head>
    <title>forgot password</title>
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
            margin: 150px auto;
        }


        .input{
            width: 100%;
            height: 42px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 20px;
            font-family: Montserrat;
            padding: 0 20px 0 50px;
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
<form  method="post">

    <table border="0">
        <tr>
            <td class="label"><strong>ENTER EMAIL</strong></td>
            <td align="center"><input class="input" type="text" name="eid" size="40px"/></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input  class="submit" type="submit" name="submit" value="GET PASSWORD"/> . <a href="login.php"><button class="submit" class="btn"  type="button">LOGIN</button></a></td>
        </tr>
    </table>

</form>


</body>
</html>



<script>

</script>
