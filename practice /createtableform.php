<html>
<head>
    <title>create table</title>
</head>
<body>

<form action="etc.php" method="POST">
    <h1> Fill Below Fields</h1>

    TABLE NAME:<input type="text" name="tname"><br><br>
    COLUMN 1:<input type="text" name="col1"><br><br>
    DATA TYPE:<select name="Dype1"><br><br>
        <option value="0">int</option>
        <option value="1">varchar</option>
        <option value="2">date</option>
        <option value="3">time</option>
    </select><br><br>
    SIZE:<input type="number" name="dsize1"><br><br>
    CONSTRAINTS:<select name="const1"><br><br>
        <option value="">primary key</option>
        <option value="">foreign key</option>
        <option value="">auto_increment</option>
        <option value="">not null</option>
        <option value="">unique</option>
        <option value="">check</option>
        <option value="">default</option>
    </select><br><br>



    COLUMN 2:<input type="text" name="col2"><br><br>
    DATA TYPE:<select name="Dtype2"><br><br>
        <option value="0">int</option>
        <option value="1">varchar</option>
        <option value="2">date</option>
        <option value="3">time</option>
    </select><br><br>
    SIZE:<input type="number" name="dsize2"><br><br>
    CONSTRAINTS:<select name="const2"><br><br>
        <option value="">primary key</option>
        <option value="">foreign key</option>
        <option value="">auto_increment</option>
        <option value="">not null</option>
        <option value="">unique</option>
        <option value="">check</option>
        <option value="">default</option>
    </select><br><br>




    COLUMN 3:<input type="text" name="col3"><br><br>
    DATA TYPE:<select name="Dtype3"><br><br>
        <option value="0">int</option>
        <option value="1">varchar</option>
        <option value="2">date</option>
        <option value="3">time</option>
    </select><br><br>
    SIZE:<input type="number" name="dsize3"><br><br>
    CONSTRAINTS:<select name="const3"><br><br>

        <option value="">primary key</option>
        <option value="">foreign key</option>
        <option value="">auto_increment</option>
        <option value="">not null</option>
        <option value="">unique</option>
        <option value="">check</option>
        <option value="">default</option>
    </select><br><br>






    COLUMN 4:<input type="text" name="col4"><br><br>
    DATA TYPE:<select name="Dtype4"><br><br>
        <option value="0">int</option>
        <option value="1">varchar</option>
        <option value="2">date</option>
        <option value="3">time</option>
    </select><br><br>
    SIZE:<input type="number" name="dsize4"><br><br>
    CONSTRAINTS:<select name="const4"><br><br>
        <option value="">primary key</option>
        <option value="">foreign key</option>
        <option value="">auto_increment</option>
        <option value="">not null</option>
        <option value="">unique</option>
        <option value="">check</option>
        <option value="">default</option>
    </select><br><br>

    <input type="submit" name="create" value="submit">



    <select name="cast">
        <option value="">select last name</option>
        <option value="0">Sharma</option>
        <option value="1">Verma</option>
        <option value="2">Kaur</option>
        <option value="3">Singh</option>

    </select>
</form>









</body>

</html>