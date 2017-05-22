<?php
$color=array('white', 'green', 'red', 'blue', 'black');
echo "1. The memory of that scene for me is like a frame of film forever frozen at that moment: the " .  $color[2] . " carpet, the " .  $color[1] . " lawn, the " .  $color[0] . "  house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo "<br>";
echo "<br>";
?>

<?php
$color = array('white', 'green', 'red');

echo " 2.$color[0] , $color[1] , $color[2]";
echo "<ul>";
echo "<li> " . $color[0] . " </li>";
echo "<li> " . $color[1] . " </li>";
echo "<li> " . $color[2] . " </li>";
echo "</ul>";
echo "<br>";
touch("new1.php");
unlink("new1.php");
echo "<br>";
?>




<?php
$fop=fopen("first.php",'r') or die('couldnot open this file');


if($fop){
    while($read=fgets($fop,4096)){
        echo "$read";
    }
    if(!feof($fop)){
        echo "eror:unexpected fgets()  fail";
    }
    fclose($fop);
    echo "</br>";
    echo "</br>";
    echo "</br>";
}
?>






<?php
$content=file_get_contents("first.php");
//$content = implode( $my_array );
echo "$content";
echo "</br>";
echo "</br>";
?>


<?php
$file="first.php";
$fop= fopen("first.php");

fwrite($fop,"ekta sharma");

echo " data appended in $file";

if($fop) {
    while ($read = fgets($fop, 4096)) {
        echo "$read";
    }
    if (!feof($fop)) {
        echo "eror:unexpected fgets()  fail";
    }
}
    fclose($fop);
echo "</br>";
echo "</br>";

?>



<?php
$size=filesize("first.php");
echo "$size" . "</br>";
echo "</br>";
echo "</br>";
echo "</br>";


?>


<html>
<body>
<form>
    <input type="text" name="f_name" placeholder="enter first name">
    <input type="text" name="l_name" placeholder="enter last name">
    <input type="submit" name="submit">
</form>

<?php
$txt= $_POST['f_name'].' - '.$_POST['l_name'];
//$var_str3 = var_export($txt, true);        //is this necessary?
//$var3 = "$var_str3";                       //is this necessary?
file_put_contents('first.txt', $txt, FILE_APPEND);
?>

</body>
</html>