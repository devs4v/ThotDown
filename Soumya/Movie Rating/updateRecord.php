<html>
<body>
    <a href="addRecord.php">Insert A Record</a>
    <a href="rateMovie.php">Rate A Movie</a>
    <a href="updateRecord.php">Update A Record</a>
    <a href="DeleteRecord.php">Delete A Record</a>
    
<?php
$con = mysqli_connect("127.0.0.1","root","sohum111","my_db");

if(mysqli_connect_errno()) {
    echo "Database could not be connected :( " . mysqli_connect_error();
} else {
    echo "Database Connected! xD";
}

/*while($row = mysqli_fetch_array($result)) {
    echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Age'];
    echo "<br>";
}*/

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

echo "<form action = 'recordUpdated.php' method='post'>";
    echo "<br>Choose which row you wish to change.<br><select name = 'oldRowNo'>";
    while($row = mysqli_fetch_array($result1)) {
        echo "<option value='$row[0]'>$row[0]</option>";
    }
    echo "</select>";
    echo "New Movie Name: <input type='text' name='newmovieName'>";
    echo "New Genre: <input type='text' name='newgenre'>";
    echo "New Year Of Release: <input type='text' name='newyearOfRelease'>";
    echo "<input type='submit'>";
echo "</form>";
?>

</body>
</html>