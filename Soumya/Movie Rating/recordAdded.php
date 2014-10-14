<html>
<body>
    <a href="addRecord.php">Insert A Record</a>
    <a href="rateMovie.php">Rate A Movie</a>
    <a href="updateRecord.php">Update A Record</a>
    <a href="DeleteRecord.php">Delete A Record</a>
    
</body>
</html>

<?php
$con = mysqli_connect("127.0.0.1","root","sohum111","my_db");

if(mysqli_connect_errno()) {
    echo "Database could not be connected :( " . mysqli_connect_error();
} else {
    echo "Database Connected! xD";
}

$MovieName = mysqli_real_escape_string($con, $_POST['movieName']);
$Genre = mysqli_real_escape_string($con, $_POST['genre']);
$YearOfRelease = mysqli_real_escape_string($con, $_POST['yearOfRelease']);

$_POST['movieName']=0;

$sql = "INSERT INTO movies (movieName, genre, yearOfRelease, rating, noOfUsersRated) VALUES ('$MovieName', '$Genre', '$YearOfRelease', '0', '0')";
if(!mysqli_query($con,$sql)) {
    die('Error in  insertion: ' . mysqli_error($con));
}
else {
    echo "1 record added";
}

$result = mysqli_query($con, "SELECT * FROM movies ORDER BY PID");
echo "<table border='1'>
<tr>
<th>PID</th>
<th>movieName</th>
<th>genre</th>
<th>yearOfRelease</th>
<th>rating</th>
<th>noOfUsersRated</th>
</tr>";


while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['PID'] . "</td>";
    echo "<td>" . $row['movieName'] . "</td>";
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td>" . $row['yearOfRelease'] . "</td>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . $row['noOfUsersRated'] . "</td>";
    echo "</tr>";}

echo "</table>";
?>