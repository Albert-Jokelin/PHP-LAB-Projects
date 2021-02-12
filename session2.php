<?php
$servername='localhost';
$username='root';
$password='';
$dbname="student";
$con=mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
    echo "Server not connected.<br>";
}
else
{
    echo "Server is connected.<br>";
}

if(!mysqli_select_db($con, $dbname))
{
    echo "Database not connected.<br>";
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $rollno = $_POST['Rollno'];
    $u_name = $_POST['Name'];
    $score = $_POST['Score'];
    $age = $_POST['Age'];

    $query = "INSERT INTO student (rollno, sname, age, score) VALUES ('$rollno', '$u_name', '$age', '$score');";
    if(mysqli_query($con,$query))
    {
        echo "Data inserted successfully.<br>";
    }
    else
    {
        echo "<br> ERROR: Could not able to execute $query. " . mysqli_error($con);
    }
}
mysqli_close($con);
?>