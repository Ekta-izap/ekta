<html>
<head>
    <title>list page6</title>
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
    </style>
</head>
<body>
<h1 align="center">LIST </h1>
<div class="ryt">
    <a href="addblog.php"><button class="btn" type="button">ADD NEW BLOG</button></a>
    <a href="login.php" ><button class="btn" type="button">LOGOUT</button></a>
</div>
<div class="footer-lis">
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
</body>
</html>
