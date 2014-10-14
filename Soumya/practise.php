<?php
echo $string  = <<<EOD
Hola! :D
EOD;

echo $string;

$con = mysqli_connect("127.0.0.1","root","sohum111","my_db");

if(mysqli_connect_errno()) {
    echo PHP_EOL . "\r\nFailed to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
} else {
    echo PHP_EOL . "\r\nMySQL connected" . PHP_EOL;
}

/*$sql = "CREATE DATABASE my_db";
if(mysqli_query($con,$sql)) {
    echo "Database my_db created successfully";
} else {
 k2   echo "Error creating database: " . mysqli_error($con);
}*/

/*$sql="SELECT * FROM 'movies_soumya' LIMIT 0,30";
$sql1 = "CREATE TABLE Persons(
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    FirstName CHAR(30),LastName CHAR(30),Age INT)";

if(mysqli_query($con,$sql1)) {
    echo "Table persons created successfully . PHP_EOL";
} else {
    echo "Error creating table: " . mysqli_error($con) . PHP_EOL; 
}
mysqli_close($con);
*/

//mysqli_query($con, "INSERT INTO persons VALUES ('Soumya','Sharma',20)");
/*
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql = "INSERT INTO persons VALUES ('$firstname', '$lastname', '$age')";
if(!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}
echo "1 record added";*/
mysqli_query($con,"UPDATE persons SET Age=19 WHERE FirstName='Naman' AND LastName='Gupta'");
$result = mysqli_query($con, "SELECT * FROM persons ORDER BY FirstName");

/*while($row = mysqli_fetch_array($result)) {
    echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Age'];
    echo "<br>";
}*/

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "</tr>";
}

echo "</table>";

kmysqli_close($con);
?>