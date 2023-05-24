<!-- Write a program in PHP to establish  connection with localhost server  -->

<?php
$servername="localhost";
$username="root";
$password="";
$connection = mysqli_connect($servername, $username, $password);
if($connection)
{
    echo "Localhost connected";
}
else
{
    echo "Unable to connect to localhost";
}

?>