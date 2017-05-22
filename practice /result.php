<html>
<body>
<?php
$Name = $_POST['name'];
$Address = $_POST['address'];
$Email = $_POST['email'];

if(isset($Name) && isset($Address) && isset($Email)) {

    echo $Name . "</br>";
    echo $Address . "</br>";
    echo $Email . "</br>";
}

else
{
    echo "fill all the data feilds" . "</br>";
}


$str=<<<EOD
Your name is $Name and you live at $Address and <br>
your mail id is $Email.</br>
EOD;
 echo $str;


define('end',1000);

echo " the value of End is:" . end;



echo "</br>5+2=" . (5+2);
echo "</br>5*2=" . (5*2);

echo "</br>5-2=" . (5-2);

echo "</br>5/2=" . (5/2);


$num = 10;
 echo $num += 15;




$strng="      ekta sharma     ";

 echo strlen("$strng") . "<br>";
echo strlen(ltrim("$strng")) . "<br>";
echo strlen(rtrim("$strng")) . "<br>";
echo strlen(trim("$strng")) . "<br>";

?>
</body>
</html>
