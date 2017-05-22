<?php
$cookie_name="ekta";
$cookie_value="9876543210";
setcookie($cookie_name,$cookie_value,time()+86400*30,'/');
$cookie_name2="ekta2";
$cookie_value2="98765";
setcookie($cookie_name2,'',time()-3600);

?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
    echo "cookie named " . $cookie_name . " is not set";
}
else
{
    echo "cookie ' " . $cookie_name . " ' is set. <br>" ;
    echo "value  is " .  $_COOKIE[$cookie_name];
    echo "</br>";
}
echo $cookie_name2 . " is deleted";
?>
</body>
</html>
