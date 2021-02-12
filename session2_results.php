<html>

<head>
    <style>

    </style>
    <title>
        Results
    </title>
</head>

<body>
    <h1>Displaying results of all students</h1>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "student";
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (!$con) {
        echo "Server not connected.<br>";
    } else {
        echo "Server is connected.<br>";
    }

    if (!mysqli_select_db($con, $dbname)) {
        echo "Database not connected.<br>";
    }

    $query = "SELECT sname, score FROM student";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["sname"]. " - Score: " . $row["score"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($con);
    ?>
</body>

</html>