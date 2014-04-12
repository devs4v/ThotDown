<?php /* Sample page */ ?>
<html>
	<body>

	<p>	Hello there, <?php echo $_POST["name"];?>.<br>
		<?php
		if($_POST["password"] == "Smartest Techies")
		{
			echo "<i>Access is Granted to you</i>";
		}
		else
		{
			echo "<b><i>Access is Denied</i></b>";
		}
		?>
		<br>

		You are interested in: <ol><br>
		<?php
		if(isset($_POST["box1"]))
			echo "<li>Reading<br></li>";
		if(isset($_POST["box2"]))
			echo "<li>Adventure<br></li>";
		if(isset($_POST["box3"]))
			echo "<li>Technology<br></li>";
		?>
		<br>

		

		Glad to see you, 
		<?php
		if($_POST["gender"] == "female")
			echo "beautiful.";
		else
			echo "Handsome.";
		?><br>

		You were born on:
		<?php
		if($_POST["month"]==1)
			echo "Jan ";
		elseif($_POST["month"]==2)
			echo "feb ";
		elseif($_POST["month"]==3)
			echo "march ";
		elseif($_POST["month"]==4)
			echo "april ";
		elseif($_POST["month"]==5)
			echo "may ";
		elseif($_POST["month"]==6)
			echo "june ";
		elseif($_POST["month"]==7)
			echo "july ";
		elseif($_POST["month"]==8)
			echo "aug ";
		elseif($_POST["month"]==9)
			echo "sept ";
		elseif($_POST["month"]==10)
			echo "oct ";
		elseif($_POST["month"]==11)
			echo "nov ";
		elseif($_POST["month"]==12)
			echo "dec ";

		echo ($_POST["date"].", ");
		echo ($_POST["year"])

		?>

	</p>
	</body

</html>
