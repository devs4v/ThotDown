<!DOCTYPE html>
<html>
<body>

Hello there, <?php echo "<b>".$_POST["name"]."</b>" ?><br>
<?php 
if($_POST["key"] == "Smartest Techies")		
{
	echo "<i><font color=\"green\">Access is Granted to you</font></i>";
}
else
{
	echo "<i><b><font color=\"red\">Access is Denied</font></i></b>";
}
?><br>
You are interested in <ol>
<?php
    foreach($_POST['interest'] as $check) {
            echo "<li>".$check."</li>";
	}
?>
</ol> 
<?php
if($_POST['gender'] == "male")
{
	echo "glad to see you,Handsome";
}
elseif ($_POST['gender'] == "female"){
	echo "glad to see you,Beautiful";
}
else {
echo "please select gender";
}
 ?>
 <br>
You were born on : <?php 
	echo  $_POST['date']." ".$_POST['month']." ".$_POST['year'];
?>
</body>
</html> 
