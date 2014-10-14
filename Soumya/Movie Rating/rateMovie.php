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

$result1 = mysqli_query($con, "SELECT * FROM movies");
$i = 0;
echo "<form action = 'movieRated.php' method='post'>";
    echo "<br>Choose which movie you wish to rate.<br><select name = 'MovieName'>";
    while($row = mysqli_fetch_array($result1)) {
        echo "<option value='$row[1]'>$row[1]</option>";
    }
    echo "</select>";
    echo "<br>Enter your rating<br><select name = 'rating'>";
    while($i<=5) {
        echo "<option value='$i'>$i</option>";
        $i = $i +1;
    }
    echo "</select>";
    echo "<input type='submit'>";    
echo "</form>";

?>