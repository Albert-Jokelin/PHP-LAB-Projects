<?php
$servername='localhost';
$username='root';
$password='';
$dbname="student";
$con=mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
    echo "Server not connected";
}
else
{
    echo "Server is connected";
}

if(!mysqli_select_db($con, $dbname))
{
    echo "Database not connected.";
}

$query = "INSERT INTO STUDENT(rollno, name, age, score) VALUES($Rollno, $Name, $Age, $Score)";
if(mysqli_query($con,$query))
{
    echo "Data inserted successfully";
}

?>