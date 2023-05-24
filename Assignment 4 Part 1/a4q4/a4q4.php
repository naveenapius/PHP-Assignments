<!-- Create HTML form to input data into fields in q3
Insert records into table 
Check manually if insertion was successful -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmsasem4";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if($connection)
{
    echo "Localhost connected<br>";
}

$name = $_POST['name'];
$mob = $_POST['phone'];
$email = $_POST['email'];

$q1 = "insert into test1 values('$name', $mob, '$email')";

$r = mysqli_query($connection, $q1);

if($r)
{
    echo "Data inserted into test1<br>";
}

?>

<html>
    <form action="a4q4.html">
        <input type="submit" value="Enter more values">
    </form>
</html>