<!DOCTYPE html>
<html>
<body>

<form action="processdetails.php" method="post">
Name: <input type="text" name="name"></br></br>
Secret Key: <input type="password" name="key"><br>
</br>
Interests: </br>
<input type="checkbox" name="interest[0]" value="Reading">Reading</br>
<input type="checkbox" name="interest[1]" value="Adventure">Adventure</br>
<input type="checkbox" name="interest[2]" value="Technology">Technology</br>
</br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
</br>
</br>
Date of Birth: DD:
<select name="date">
<option value="not selected">--</option>
<?php 
 $i=0;
 for($i=1;$i<=31;$i++)
 {
echo "<option value=\"".$i."\">".$i."</option>"; 
}
 ?>
</select> MM:
<select name="month">
  <option value="not selected">--</option>
  <option value="January">01</option>
  <option value="February">02</option>
  <option value="March">03</option>
  <option value="April">04</option>
  <option value="May">05</option>
  <option value="June">06</option>
  <option value="July">07</option>
  <option value="August">08</option>
  <option value="September">09</option>
  <option value="October">10</option>
  <option value="November">11</option>
  <option value="December">12</option>
 </select> YYYY:
<select name="year">
<option value="not selected">--</option>
<?php 
 $i=0;
 for($i=1970;$i<=2014;$i++)
 {
echo "<option value=\"".$i."\">".$i."</option>"; 
}
 ?>
</select>  
</br>
</br></br>
<input type="submit" value="Press here">
</form>
</body>
</html> 