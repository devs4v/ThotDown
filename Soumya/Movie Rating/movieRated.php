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

$movieName = mysqli_real_escape_string($con,$_POST['MovieName']);
$Rating = mysqli_real_escape_string($con, $_POST['rating']);

echo "Rating : $Rating";
$get_query = mysqli_query($con, "SELECT * FROM movies WHERE movieName = '$movieName'");
while($row = mysqli_fetch_array($get_query)) {
    $newRating = ($row['rating']*$row['noOfUsersRated']);
    $newRating = $newRating + $Rating;
    $newUsersRated = $row['noOfUsersRated']+1;
    $newRating = $newRating/$newUsersRated;
    $query = "UPDATE movies SET rating = $newRating, noOfUsersRated = $newUsersRated WHERE movieName = '$movieName'";
    if(!mysqli_query($con,$query)) {
        die('Not Updated: ' . mysqli_error($con));
    } else {
        echo "Updated";
    }
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