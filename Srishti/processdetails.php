<!DOCTYPE html>
<html>
	<body>
	
		Hello there, <?php echo "<b>".$_POST["name"]."</b>" ?><br>
		<?php
			if($_POST["key"] == "Smartest Techies")	
			{
				echo "<p style=\"color:green; font-style:italic;\">Access is Granted to you</p>";
			}
			else
			{
				echo "<p style=\"color:red; font-style:italic; font-weight:bold\">Access is Denied</p>";
			}
		?>
		<br>
		
		You are interested in 
		<ol>
		<?php
			foreach($_POST["interest"] as $check)
			{
				echo "<li>".$check."</li>";
			}
		?>
		</ol> 
		
		<?php
			echo "Glad to see you, ";
			if($_POST["gender"]=="male")
			{
				echo "Handsome";
			}
			elseif($_POST["gender"]=="female")
			{
				echo "Beautiful";
			}
			else
				echo "Please select gender";
			?>
			<br>
			
			You were born on: 
			<?php
				echo $_POST["date"]." ";
				switch($_POST["month"])
				{
					case 1:
						echo "January";
						break;
						
					case 2:
						echo "February";
						break;
						
					case 3:
						echo "March";
						break;
						
					case 4:
						echo "April";
						break;
						
					case 5:
						echo "May";
						break;
						
					case 6:
						echo "June";
						break;
						
					case 7:
						echo "July";
						break;
						
					case 8:
						echo "August";
						break;
						
					case 9:
						echo "September";
						break;
						
					case 10:
						echo "October";
						break;
						
					case 11:
						echo "November";
						break;
						
					case 12:
						echo "December";
						break;
				}
				
				echo " ".$_POST["year"];
			?>
			
	</body>
</html>