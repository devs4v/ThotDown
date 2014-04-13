<!DOCTYPE html>
<html>
	<head>
		<title>Penguin</title>
	</head>
	
	<body>

		<form action="processdetails.php" method="post">
		Name: <input type="text" name="name"><br><br>
		Secret Key: <input type="password" name="key"><br><br>
		Interests:
		<input type="checkbox" name="interest[]" value="reading">Reading
		<input type="checkbox" name="interest[]" value="adventure">Adventure
		<input type="checkbox" name="interest[]" value="technology">Technology
		<br><br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<br><br>
		Date of Birth:
			DD:
			<select name="date">
			<option value="not selected">--</option>
			<?php
				$bleh=0;
				for($bleh=1; $bleh<=31; $bleh++)
				{
					echo "<option value=\"".$bleh."\">".$bleh."</option>";
				}
			?>
			
			</select> MM:
			<select name="month">
			<option value="not selected">--</option>
			<?php
				$meh=0;
				for($meh=1; $meh<=12; $meh++)
				{
					echo "<option value=\"".$meh."\">".$meh."</option>";
				}
			?>
			
			</select> YYYY:
			<select name="year">
			<option value="not selected">--</option>
			<?php
				$hurr=0;
				for($hurr=1980; $hurr<=2014; $hurr++)
				{
					echo "<option value=\"".$hurr."\">".$hurr."</option>";
				}
			?>
			</select>
		<br><br>
			
		
		<input type="submit" value="Submit">
			
		</form>
		
	</body>
</html>