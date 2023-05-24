<?php
$servername="localhost";
$username="root";
$password="";
$dbname = $_POST['dbname'];
$connection = mysqli_connect($servername, $username, $password);
if($connection)
{
    echo "Localhost connected<br>";
}
$q1 = "create database $dbname";
$r = mysqli_query($connection, $q1);
if($r)
{
    echo "Database $dbname created<br>";
}

?>