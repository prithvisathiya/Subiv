<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="sublease.css">
	<script type="text/javascript" src = "jquery-2.1.0.js"></script>
	<script type="text/javascript" src = "sublease.js"></script>
</head>
<body>	
	<ul id="menu">
		<li>
			<a  class="menitem" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a id="active" class="menitem" href="available.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Available Listings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="contact.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		</li>
	</ul>
	<br>
	<br>
	<br>
	<h1>Delete Post</h1><br><br>
	Enter password here to delete your post<br>
	<form method="post" action="delete.php">
		<input name="passwordattempt" type="text" id = "delete">
		<input type="submit" value="Submit" name="button4"><br><br><br>
	</form><br><br><br>

	<?php  
		if (isset($_POST['button4'])) {
			$db_handle = mysql_connect("localhost", "subiwhlu_prithvi", "Arbor1994");
			$db_tf = mysql_select_db("subiwhlu_subleaseList", $db_handle);

			$passwordattempt = $_POST['passwordattempt'];
			

			$query = "SELECT * FROM `table3` WHERE `Password` = '" . $passwordattempt . "'";
			$result = mysql_query($query);
		

			if (mysql_num_rows($result) == 1) {
				$query1 = "DELETE FROM `table3` WHERE `Password` = '" . $passwordattempt . "'";
				$result1 = mysql_query($query1);
				print("<script>alert('Your post has been deleted');</script>");
			}
		}
	?>
</body>
</html>