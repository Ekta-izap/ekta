<html>
<body>
<?php
$Name = $_POST['name'];
$Address = $_POST['address'];
$Email = $_POST['email'];

if(empty($_POST(Name)) {
    echo "name is required";
}
else{
    echo $Name . "</br>";
    echo $Address . "</br>";
    echo $Email . "</br>";
}

?>
</body>
</html>

