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

$update_query= "DELETE FROM movies WHERE PID = '$RowID'";

if(!mysqli_query($con,$update_query)) {
    die('Error in  deletion: ' . mysqli_error($con));
}
else {
    echo "record deleted";
}

/*$result1 = mysqli_query($con, "SELECT * FROM movies WHERE PID>'$RowID'");

echo "<table border='1'>
<tr>
<th>PID</th>
<th>movieName</th>
<th>genre</th>
<th>yearOfRelease</th>
<th>rating</th>
<th>noOfUsersRated</th>
</tr>";


while($row = mysqli_fetch_array($result1)) {
    echo "<tr>";
    echo "<td>" . $row['PID'] . "</td>";
    echo "<td>" . $row['movieName'] . "</td>";
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td>" . $row['yearOfRelease'] . "</td>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . $row['noOfUsersRated'] . "</td>";
    echo "</tr>";}

echo "</table>";*/
$result2 = mysqli_query($con, "SELECT * FROM movies WHERE PID>'$RowID'");

while($row = mysqli_fetch_array($result2)) {
//    echo "$row[PID]";
    $newID=$row['PID']-1;
//    echo "$newID";
    mysqli_query($con, "UPDATE movies SET PID='$newID' WHERE PID='$row[PID]'");
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
    if(count($fetchSet) == 0) {
        mysqli_query($con, "ALTER TABLE movies SET PID = 1");
    } else{
        echo "<tr>";
        echo "<td>" . $row['PID'] . "</td>";
        echo "<td>" . $row['movieName'] . "</td>";
        echo "<td>" . $row['genre'] . "</td>";
        echo "<td>" . $row['yearOfRelease'] . "</td>";
        echo "<td>" . $row['rating'] . "</td>";
        echo "<td>" . $row['noOfUsersRated'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>