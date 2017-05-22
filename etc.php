<?php
//print_r($_GET);exit;
?>

<?php
$conn=mysql_connect('localhost','ekta','ekta');
$offset=$_GET['page']*10;
$db = mysql_select_db('ekta', $conn);

$qrys = "SELECT title,description FROM blog LIMIT 10 OFFSET".$offset;
$result=mysql_query($qrys,$conn);
$num=mysql_num_rows($result);
//print_r($num$num);
mysql_close($conn);

?>





<?php
//if (isset($_POST['submit'])) {


define('host', 'localhost');
define('user', 'ekta');
define('password', 'ekta');
$conn = mysql_connect('localhost', 'ekta', 'ekta');


$db = mysql_select_db('ekta', $conn);

$qry = " DELETE FROM blog WHERE user_id='$_POST[user_id]' ";

$result = mysql_query($qry, $conn);
if ($result == 1) {
    echo "data deleted successfully";
} else {
    echo "cannot connect to database";
}

mysql_close($conn);
//}
?>






<html>
<head>
    <title>list blogs</title>
    <style>
        .button{
            margin:15px;
            align-items:left;
        }
        .ryt
        {
            float: right;
            display: block;
        }
        ul>.pagination {
            display: inline-block;
            align: center;
        }

        ul>a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            font-size: 20px;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        /*.btn{*/
        /*height: 32px;*/
        /*font-size: 15px;*/
        /*font-family: Montserrat;*/
        /*padding: 0 20px 0 20px;*/
        /*margin:10px;*/
        /*}*/
        .content-div
        {
            width: 80%;
            border:1px solid red;
        }
    </style>
</head>
<body>
<h1 align="center">LIST </h1>
<div class="ryt">
    <a href="addblog.php"><button class="btn" type="button">ADD NEW BLOG</button></a>
    <a href="login.php" ><button class="btn" type="button">LOGOUT</button></a>
</div>

<div class="content-div">
    <?php
    for($i=1;$i<=$num;$i++) {
    $row = mysql_fetch_array($result);


    ?>

        <ul><li><h2><?php echo $row['title']; ?></h2></li></ul>
        <p><?php echo $row['description']; ?></p><button>Edit</button><button>Delete</button><br></br>

        <?php
    }
    ?>
    <div >
        <ul class="pagination">
            <a href="#">&laquo;</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>

            <a href="#">&raquo;</a>
        </ul>
    </div>
</div>


</body>
</html>
