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
	<h1>Edit Post</h1><br><br>
	Enter password here to make changes to your post<br>
	<form method="post" action="edit.php">
		<input name="passwordattempt" type="text" id = "edit">
		<input type="submit" value="Submit" name="button4"><br><br><br>
	</form>

	<?php  

	
		
		if (isset($_POST['button4'])) {
			
			
			$db_handle = mysql_connect("localhost", "subiwhlu_prithvi", "Arbor1994");
			$db_tf = mysql_select_db("subiwhlu_subleaseList", $db_handle);


			$passwordattempt = $_POST['passwordattempt'];
			
			$passwordattempt = mysql_real_escape_string($passwordattempt);


			

			$query = "SELECT * FROM `table3` WHERE `Password` = '" . $passwordattempt . "'";
			$result = mysql_query($query);
			
			if (mysql_num_rows($result) == 0) {
				print "<script>alert('Password is incorrect. Please try again');</script>";
			}

			else if (mysql_num_rows($result) == 1) {


				$query1 = "SELECT * FROM `table3` WHERE `Password` = '" . $passwordattempt . "'";
				$result1 = mysql_query($query1);

				$db_field = mysql_fetch_assoc($result1); 

				if ($db_field['Term'] == "Summer") {
					# code...
					print("<form method = 'post' action = 'edit.php'>
								Name <input type = 'text' value = '" . $db_field['Name'] . "' name = 'person' required><br>
								Term <select name='term' required>
								<option value='Summer' selected>Summer</option>
								<option value='Fall'>Fall</option>
								<option value='Winter'>Winter</option>
								<option value='Spring'>Spring</option>
							 </select><br>
							 Year <input type='text' name= 'yr' value = '" . $db_field['Year'] . "'required><br>
						House # <input type='text' name='hnum' size='6' value = '" . $db_field['Hnum'] . "' required> &nbsp;Street <input type='text' name='street' value = '" . $db_field['Street'] . "' required><br>
						City <input type='text' name='city' value = '" . $db_field['City'] . "' required> &nbsp;State <input type='text' maxlength = '2' name='state' size='2' value = '" . $db_field['State'] . "' required> &nbsp;ZIP <input type='text' name='zip' required value = '" . $db_field['Zip'] . "' size='6'> <br>
						E-mail <input type='text' name='email' value = '" . $db_field['Email'] . "' required><br>
						Phone <input type='text' name='phone' value = '" . $db_field['Phone'] . "' required><br>
						Available Spots <input type='text' name='spots' value = '" . $db_field['Spots'] . "' required><br>
						Rent/month: $<input type='text' name='rent' size='5' value = '" . $db_field['Rent'] . "' required><br>
						Additional comments: <br><textarea name='comments' rows='7' cols='70' required>" . $db_field['Comments'] . "</textarea><br>
						<input id = 'hiddenpass' type = 'text' name = 'pass' value = '" . $passwordattempt . "'>
						<input type='submit' name='button5' value='Make Changes' id='submit'>
						<br>
					</form>");
				}

				else if ($db_field['Term'] == "Fall") {
					# code...
					print("<form method = 'post' action = 'edit.php'>
								Name <input type = 'text' value = '" . $db_field['Name'] . "' name = 'person' required><br>
								Term <select name='term' required>
								<option value='Summer'>Summer</option>
								<option value='Fall' selected>Fall</option>
								<option value='Winter'>Winter</option>
								<option value='Spring'>Spring</option>
							 </select><br>
							 Year <input type='text' name= 'yr' value = '" . $db_field['Year'] . "'required><br>
						House # <input type='text' name='hnum' size='6' value = '" . $db_field['Hnum'] . "' required> &nbsp;Street <input type='text' name='street' value = '" . $db_field['Street'] . "' required><br>
						City <input type='text' name='city' value = '" . $db_field['City'] . "' required> &nbsp;State <input type='text' maxlength = '2' name='state' size='2' value = '" . $db_field['State'] . "' required> &nbsp;ZIP <input type='text' name='zip' required value = '" . $db_field['Zip'] . "' size='6'> <br>
						E-mail <input type='text' name='email' value = '" . $db_field['Email'] . "' required><br>
						Phone <input type='text' name='phone' value = '" . $db_field['Phone'] . "' required><br>
						Available Spots <input type='text' name='spots' value = '" . $db_field['Spots'] . "' required><br>
						Rent/month: $<input type='text' name='rent' size='5' value = '" . $db_field['Rent'] . "' required><br>
						Additional comments: <br><textarea name='comments' rows='7' cols='70' required>" . $db_field['Comments'] . "</textarea><br>
						<input id = 'hiddenpass' type = 'text' name = 'pass' value = '" . $passwordattempt . "'>
						<input type='submit' name='button5' value='Make Changes' id='submit'>
						<br>
					</form>");
				}

				else if ($db_field['Term'] == "Winter") {
					# code...
					print("<form method = 'post' action = 'edit.php'>
								Name <input type = 'text' value = '" . $db_field['Name'] . "' name = 'person' required><br>
								Term <select name='term' required>
								<option value='Summer'>Summer</option>
								<option value='Fall'>Fall</option>
								<option value='Winter' selected>Winter</option>
								<option value='Spring'>Spring</option>
							 </select><br>
							 Year <input type='text' name= 'yr' value = '" . $db_field['Year'] . "'required><br>
						House # <input type='text' name='hnum' size='6' value = '" . $db_field['Hnum'] . "' required> &nbsp;Street <input type='text' name='street' value = '" . $db_field['Street'] . "' required><br>
						City <input type='text' name='city' value = '" . $db_field['City'] . "' required> &nbsp;State <input type='text' maxlength = '2' name='state' size='2' value = '" . $db_field['State'] . "' required> &nbsp;ZIP <input type='text' name='zip' required value = '" . $db_field['Zip'] . "' size='6'> <br>
						E-mail <input type='text' name='email' value = '" . $db_field['Email'] . "' required><br>
						Phone <input type='text' name='phone' value = '" . $db_field['Phone'] . "' required><br>
						Available Spots <input type='text' name='spots' value = '" . $db_field['Spots'] . "' required><br>
						Rent/month: $<input type='text' name='rent' size='5' value = '" . $db_field['Rent'] . "' required><br>
						Additional comments: <br><textarea name='comments' rows='7' cols='70' required>" . $db_field['Comments'] . "</textarea><br>
						<input id = 'hiddenpass' type = 'text' name = 'pass' value = '" . $passwordattempt . "'>
						<input type='submit' name='button5' value='Make Changes' id='submit'>
						<br>
					</form>");
				}
				else if ($db_field['Term'] == "Spring") {
					# code...
					print("<form method = 'post' action = 'edit.php'>
								Name <input type = 'text' value = '" . $db_field['Name'] . "' name = 'person' required><br>
								Term <select name='term' required>
								<option value='Summer'>Summer</option>
								<option value='Fall'>Fall</option>
								<option value='Winter'>Winter</option>
								<option value='Spring' selected>Spring</option>
							 </select><br>
							 Year <input type='text' name= 'yr' value = '" . $db_field['Year'] . "'required><br>
						House # <input type='text' name='hnum' size='6' value = '" . $db_field['Hnum'] . "' required> &nbsp;Street <input type='text' name='street' value = '" . $db_field['Street'] . "' required><br>
						City <input type='text' name='city' value = '" . $db_field['City'] . "' required> &nbsp;State <input type='text' maxlength = '2' name='state' size='2' value = '" . $db_field['State'] . "' required> &nbsp;ZIP <input type='text' name='zip' required value = '" . $db_field['Zip'] . "' size='6'> <br>
						E-mail <input type='text' name='email' value = '" . $db_field['Email'] . "' required><br>
						Phone <input type='text' name='phone' value = '" . $db_field['Phone'] . "' required><br>
						Available Spots <input type='text' name='spots' value = '" . $db_field['Spots'] . "' required><br>
						Rent/month: $<input type='text' name='rent' size='5' value = '" . $db_field['Rent'] . "' required><br>
						Additional comments: <br><textarea name='comments' rows='7' cols='70' required>" . $db_field['Comments'] . "</textarea><br>
						<input id = 'hiddenpass' type = 'text' name = 'pass' value = '" . $passwordattempt . "'>
						<input type='submit' name='button5' value='Make Changes' id='submit'>
						<br>
					</form>");
				}		
			}			
		}

		if(isset($_POST['button5'])) {
			
			$db_handle = mysql_connect("localhost", "subiwhlu_prithvi", "Arbor1994");
			$db_tf = mysql_select_db("subiwhlu_subleaseList", $db_handle);

			
			$person = mysql_real_escape_string($_POST['person']); 		
			$tm = mysql_real_escape_string($_POST['term']);
			$year =mysql_real_escape_string($_POST['yr']);
			$hnum = mysql_real_escape_string($_POST['hnum']);
			$street = mysql_real_escape_string($_POST['street']);
			$city = mysql_real_escape_string($_POST['city']);
			$state = mysql_real_escape_string($_POST['state']);
			$zip = mysql_real_escape_string($_POST['zip']);
			$email = mysql_real_escape_string($_POST['email']);
			$phone = mysql_real_escape_string($_POST['phone']);
			$spots = mysql_real_escape_string($_POST['spots']);
			$rent = mysql_real_escape_string($_POST['rent']);
			$comments = mysql_real_escape_string($_POST['comments']);
			$passwordattempt = mysql_real_escape_string($_POST['pass']);

			
		
			

			$sqlquery1 = "SELECT * FROM `passtable` WHERE `ID` = 1";
			$result5 = mysql_query($sqlquery1);

			$sqlquery = "UPDATE `table3` SET `Name`='" . $person . "', Term = '" . $tm . "', Year = '" . $year . "', Hnum = '" . $hnum . "', Street = '" . $street . "', City = '" . $city . "', State = '" . $state . "', Zip = '" . $zip . "', Email = '" . $email . "', Phone = '" . $phone . "', Spots = '" . $spots . "', Rent = '" . $rent . "', Comments = '" . $comments . "' WHERE `Password` = '" . $passwordattempt . "'";
			$result6 = mysql_query($sqlquery);
			if ($result6) {
				print("<script>alert('Your changes have be successfully recorded');</script>");
			}
		}
	?>

</body>
</html>