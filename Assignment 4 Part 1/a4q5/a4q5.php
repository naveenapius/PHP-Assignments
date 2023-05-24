<!-- After addition of each record, display records available in tabular form
Display number of records in table -->

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

$table = "test1";
$name = $_POST['name'];
$mob = $_POST['phone'];
$email = $_POST['email'];

$q1 = "insert into $table values('$name', $mob, '$email')";

$r = mysqli_query($connection, $q1);

if($r)
{
    echo "Data inserted into $table<br>";
}

$q2 = "select * from $table";
$r2 = mysqli_query($connection, $q2);
if($r2)
{
    echo "Data from $table fetched<br>";
}

echo "<table border='1'>
<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
</tr>";

while($row=mysqli_fetch_array($r2))
{
    echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['mob']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>"; 
}
echo "</table><br>";
?>

<html>
    <form action="a4q5.html">
        <input type="submit" value="Enter more values">
    </form>
</html>
