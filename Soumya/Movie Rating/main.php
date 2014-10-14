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


/*$sqli = "CREATE TABLE Movies(
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    movieName CHAR(30),
    genre CHAR(10),
    yearOfRelease INT(4),
    rating NULL DECIMAL)";
*/

/*$sqli = "ALTER TABLE movies ADD noOfUsersRated int";
if(mysqli_query($con,$sqli)) {
    echo "Column added successfully " . PHP_EOL;
} else {
    echo "Column not added" . mysqli_error($con) . PHP_EOL; 
}

/*txtUserId = getRequestString("movieName");
$result = mysqli_query($con, "SELECT * FROM Users WHERE movieName = " + txtUserId);
*/

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



  /*<option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>

echo "<select name='category'>";
while ($row = mysqli_fetch_row($result)){
   echo "<option value='$row[0]'>$row[1]</option> ";
}
echo "</select>";*/
?>
</body>
</html>