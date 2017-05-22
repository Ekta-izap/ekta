<?php
session_start();
include('lib.php');
$user_object = gateway();

include "connection.php";

if(isset($_GET['page'])){
    $page = $_GET{'page'} - 1;
    $offset=5;
    $offset =  $page* $offset ;

}else{
    $offset = 0;
    $page = 0;
}


$qrys = "SELECT user_id,blog_id,title,description FROM blog ORDER BY blog_id DESC LIMIT 5 OFFSET $offset";
$result=mysql_query($qrys,$conn);
$num=mysql_num_rows($result);
$qry_num="SELECT * FROM blog";
$result1=mysql_query($qry_num,$conn);
$num1=mysql_num_rows($result1);
mysql_close($conn);

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

        body {
            background: url('ekta.jpg') no-repeat fixed  center;
            background-size: cover;

        }
         .blog{
             padding-left: 80px;
         }
        .footer {

            display: inline-block;
            color: #ffffff;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        /*ul>a {*/
            /*color: black;*/
            /*float: left;*/
            /*padding: 8px 16px;*/
            /*text-decoration: none;*/
            /*font-size: 20px;*/
        /*}*/

            .pagination {
                padding-left: 150px;
                font-size:24px;
                
            }




        .footer:hover {
            border: 1px solid #fff;
            border-radius: 4px;
        }
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
            /*border:1px solid red;*/
        }
        .list>li>a{
            text-decoration: none;
        }
        ul>list>li>a
        {
            color:#fff;

        }
        ul>list>li>a
        {
            color:#fff;
            text-decoration: none;
        }
        .text-clr>a
        {
            color: #ffffff;
            text-decoration: none;
        }
        .text-clr>a:hover
        {
            text-decoration: underline;
        }
        .listt{
            text-decoration:underline;
            color: cadetblue;
        }
        .welcome{
            color: black;
            font-weight: bold;


        }
    </style>
</head>
<body>
<div class="welcome">
<?="Welcome: {$user_object->f_name} {$user_object->l_name}"?>
</div>
<div class="blog">
<h1  class="listt" align="center">LIST </h1>
<div class="ryt">
    <a href="addblog.php"><button class="btn" type="button">ADD NEW BLOG</button></a>
    <a href="login.php?action=logout" ><button class="btn" type="button">LOGOUT</button></a>
</div>

<div class="content-div">
    <ul  class="list" style="list-style-type:square; color: #FFFFFF;">
    <?php
    while($row = mysql_fetch_object($result)){
     ?>
        <li><h1><?=$row->title?></h1>
        <div class="text-clr">
            <p><?=$row->description?></p>
            <br >

            <?php
            if($row->user_id === $user_object->user_id){
             echo "<a  href=\"update.php?blog_id={$row->blog_id}\">Edit</a> | <a href=\"del.php?blog_id={$row->blog_id}\">Delete</a>";
            }
            ?>

        </div>
        </li>
        <?php
    }
        ?>

        </ul>

</div>
    <div class="pagination">
        <?php

        $pages = $num1/5;


        for($i=0; $i<$pages; $i++)

        {
            $a= $i+1;
            echo "<a href='?page=$a'>" . "<li class='footer'>" . $a . "</li>" . "</a>";
        }

        ?>
    </div>
</div>


</body>
</html>
