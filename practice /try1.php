

<html>
<body>
<?php
$Name = $_POST['name'];
$Address = $_POST['address'];
$Email = $_POST['email'];

if(empty($_POST["name"])) {
    echo "name is required" . "</br>";
    echo $Address . "</br>";
    echo $Email . "</br>";
}
else{
    echo $Name . "</br>";
    echo $Address . "</br>";
    echo $Email . "</br>";
}

?>
</body>
</html>

