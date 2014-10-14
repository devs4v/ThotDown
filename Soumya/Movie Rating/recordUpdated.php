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

$RowID = mysqli_real_escape_string($con,$_POST['oldRowNo']);
$NewMovieName = mysqli_real_escape_string($con, $_POST['newmovieName']);
$NewGenre = mysqli_real_escape_string($con, $_POST['newgenre']);
$NewYearOfRelease = mysqli_real_escape_string($con, $_POST['newyearOfRelease']);

$update_query="UPDATE movies SET movieName = '$NewMovieName', genre = '$NewGenre', yearOfRelease = '$NewYearOfRelease' WHERE PID = '$RowID'";

if(!mysqli_query($con,$update_query)) {
    die('Error in  updation: ' . mysqli_error($con));
}
else {
    echo "record updated";
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