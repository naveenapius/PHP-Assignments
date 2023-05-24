<!-- Write a program in HTML to input the following:
i. name of database
ii. table namespace
iii. create table with fields name, email, mobileno -->

<?php
$servername="localhost";
$username="root";
$password="";
$dbname = $_POST['dbname'];
$connection = mysqli_connect($servername, $username, $password, $dbname);
if($connection)
{
    echo "Established connection to database $dbname<br>";
}
$t = $_POST['table'];
$q1 = "create table $t(name varchar(15), mob int(10), email varchar(20))";
$r = mysqli_query($connection, $q1);
if($r)
{
    echo "Table $t created<br>";
}

?>