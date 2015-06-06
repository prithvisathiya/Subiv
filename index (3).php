<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="sublease.css">
	<script type="text/javascript" src = "jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript" src = "sublease.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-48497412-1', 'subiv.com');
	  ga('send', 'pageview');

	</script>


	<?php  
		function printList1($db_field, $listnum) {
			print("<div class = 'all1'><span id = 'num'>#" . $listnum . "</span><br><br>");
			print "<span class = 'field'>Name:</span> " . $db_field['Name'] . "<BR>";
			print "<span class = 'field'>Term:</span> " . $db_field['Term'] . "<BR>";
			print "<span class = 'field'>Year:</span> " . $db_field['Year'] . "<BR>";
			print "<span class = 'field'>Address:</span> " . $db_field['Hnum'] . " " . $db_field['Street'] . " " . $db_field['City'] . ", " . $db_field['State'] . " " . $db_field['Zip'] . "<BR>";
			print "<span class = 'field'>Email:</span> " . $db_field['Email'] . "<BR>";
			print "<span class = 'field'>Phone:</span> " . $db_field['Phone'] . "<BR>";
			print "<span class = 'field'>Rent/Month:</span> $" . $db_field['Rent'] . "<BR>";
			print "<span class = 'field'>Available spots:</span> " . $db_field['Spots'];
			print "<div class = 'flashtext'><span id = 'desc'>More Description</span><br><br>" . $db_field['Comments'] . "<div class = 'xdiv'>&nbsp;<a href = 'delete.php' class = 'x'>X</a>&nbsp;&nbsp;&nbsp;<a href = 'edit.php' class = 'edit'>Edit</a></div></div></div><BR><br><br>";
		}
		function printList2($db_field, $listnum) {
			print("<div class = 'all2'><span id = 'num'>#" . $listnum . "</span><br><br>");
			print "<span class = 'field'>Name:</span> " . $db_field['Name'] . "<BR>";
			print "<span class = 'field'>Term:</span> " . $db_field['Term'] . "<BR>";
			print "<span class = 'field'>Year:</span> " . $db_field['Year'] . "<BR>";
			print "<span class = 'field'>Address:</span> " . $db_field['Hnum'] . " " . $db_field['Street'] . " " . $db_field['City'] . ", " . $db_field['State'] . " " . $db_field['Zip'] . "<BR>";
			print "<span class = 'field'>Email:</span> " . $db_field['Email'] . "<BR>";
			print "<span class = 'field'>Phone:</span> " . $db_field['Phone'] . "<BR>";
			print "<span class = 'field'>Rent/Month:</span> $" . $db_field['Rent'] . "<BR>";
			print "<span class = 'field'>Available spots:</span> " . $db_field['Spots'];
			print "<div class = 'flashtext'><span id = 'desc'>More Description</span><br><br>" . $db_field['Comments'] . "<div class = 'xdiv'>&nbsp;<a href = 'delete.php' class = 'x'>X</a>&nbsp;&nbsp;&nbsp;<a href = 'edit.php' class = 'edit'>Edit</a></div></div></div><BR><br><br>";
		}


	?>
</head>
<body>
	<script>
		$(function() {
			var availableTags = [
			"Camino Majorca",
			"Pasado Road",
			"Trigo Road",
			"Sabado Tarde Road",
			"Camino Lindo",
			"Del Playa Drive",
			"Camino Corto",
			"Fortuna Road",
			"Fortuna Lane",
			"Estero Road",
			"Sueno Road",
			"Camino Del Sur",
			"Abrego Road",
			"Berkshire Terrace",
			"Picasso Road",
			"Camino Pescadero",
			"Cervantes Road",
			"El Greco Road",
			"Segovia Road",
			"Cordoba Road",
			"Pardall Road",
			"Madrid Road",
			"Seville Road",
			"Embarcadero del Mar",
			"El Embarcadero Road",
			"Embarcadero del Norte",
			"El Nido Lane",
			"El Colegio Road",
			"Willowgrove Drive",
			"Sweet Rain Place",
			"Poppyfield Place",
			"Sweetwater Way",
			"Woodleaf Lane",
			"Buttonwood Lane",
			"High Grove Avenue",
			"Fireside Lane",
			"Peppergrass Court",
			"Silkberry Lane",
			"Cool Brook Lane",
			"Orange Blossom Lane",
			"Shadowbrook Drive",
			"Bayberry Lane"];
			$( ".streetslist" ).autocomplete({
				source: availableTags
			});
		});
	</script>
	<ul id="menu">
		<li>
			<a id="active" class="menitem" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="available.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Available Listings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="contact.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		</li>
	</ul>
	<br>
	<br>
	<br>


	<h1>What do you want to do?</h1><br>
	<div id = "post">
		<pre>L I S T   A   S U B L E A S E </pre> 
		<form name="form1" method="post" action="index.php" class="frontform">
	
			Name <input type="text" name = "person" id = "fuck" required><br>
			Term <select name="term" required>
					<option value="Summer">Summer</option>
					<option value="Fall">Fall</option>
					<option value="Winter">Winter</option>
					<option value="Spring">Spring</option>
				 </select>
			Year <input type="text" name="yr" required size="7"><br>
			House # <input type="text" name="hnum" size="6" required> &nbsp;Street <input class="streetslist" type="text" name="street" placeholder = "ex: Pasado Road" required><br>
			City <input type="text" name="city" value="Goleta"  required> &nbsp;State <input type="text" maxlength = "2" name="state" value="CA" size="2" required> &nbsp;ZIP <input type="text" name="zip" required size="6"> <br>
			E-mail <input type="text" name="email" required><br>
			Phone <input type="text" name="phone" placeholder = "No spaces or dashes" required id="special"><br>
			Available Spots <input type="text" name="spots" size="3" required><br>
			Rent/month: $<input type="text" name="rent" size="5" required><br>
			Password: <input required type="text" name="pass" placeholder = "no spaces/dashes/apostrophes" size="27"><a id="pass" href="">What's this for?</a><br>
			Additional comments: (400 characters max)<br><textarea required name="comments" rows="5" cols="50" maxlength = "400" placeholder = "Here, you can enter any extra information such the condition of the house, number of bedrooms, type of person or gender you are looking for, etc. Information here would be very helpful for matching"></textarea><br>
			<input type="submit" name="button1" value="submit" id="submit">
			<br>
			
		</form>

	</div>

	<div id = "search">
	<pre>S E A R C H   A   S U B L E A S E</pre> 
		<form name="form2" method="post" action="index.php" class="frontform">
			<span id = "req">*required </span><br>
			<span id = "req">*</span>Term <select name="one" required>
												<option value="Summer">Summer</option>
												<option value="Fall">Fall</option>
												<option value="Winter">Winter</option>
												<option value="Spring">Spring</option>
											 </select><br><br><br><br><br>
			<span id = "req">*</span>Year <input type="text" name="two" required><br><br><br><br><br>
			Street <input class="streetslist" type="text" placeholder = "ex: Pasado Road" name="three" id="um"><br><br><br><br><br><br>
			Price Range: &nbsp;&nbsp; From $<input type="text" name="plow" size="4"> to $<input type="text" name="phigh" size="4"><br><br><br><br>
			<a href="#post"><input type="submit" name="button2" value="search"></a>
			<br>
			
		</form>

	</div><br><br><br>
	
	<?php  
		$db_handle = mysql_connect("127.0.0.1", "subiwhlu_prithvi", "Arbor1994");
		$db_tf = mysql_select_db("subiwhlu_subleaseList", $db_handle);




		

		//This section is to see if someone posted a new sublease

		if (isset($_POST['button1'])) {
						# code...
			
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
			$pass = mysql_real_escape_string($_POST['pass']);
			$comments = mysql_real_escape_string($_POST['comments']);



			$SQL1 = "SELECT * FROM `table3`";
			$result_1 = mysql_query($SQL1);
			

			$confirmAdd = 1;

			while ($db_field = mysql_fetch_assoc($result_1)) {
				if ($db_field['Password'] == $pass) {
					print "<script>alert('Password already taken. Please try a different one');</script>";
					$confirmAdd = 0;
				}
			}

			

			while ( $db_field = mysql_fetch_assoc($result_1) ) {
				if ($db_field['Term'] == $tm){
					if ($db_field['Year'] == $year){
						if ($db_field['Hnum'] == $hnum) {
							if ($db_field['Street'] == $street) {
								if ($db_field['City'] == $city)	{
									if ($db_field['State'] == $state) {						
										if ($db_field['Email'] == $email) {
											if ($db_field['Phone'] == $phone) {
												if ($db_field['Spots'] == $spots) {
													if ($db_field['Password'] == $pass) {
														if ($db_field['Comments'] == $comments) {
															if ($db_field['Zip'] == $zip) {
																$confirmAdd = 0;
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				} 
			}

			if (strlen($phone) == 10 && $confirmAdd == 1){

				print("<script>alert('Your offer has been successfully submitted! To confirm, you can check the available listings or search for your posting');</script>");
				
				$addToDb = "INSERT INTO `table3` (Name, Term, Year, Hnum, Street, City, State, Zip, Email, Phone, Spots, Rent, Password, Comments) 
				VALUES ('" . $person .  "', '" . $tm . "', '" . $year . "', '" . $hnum . "', '" . $street . "', '" . $city . "', '" . $state . "', '" . $zip . "', '" . $email . "', '" . $phone . "', '" . $spots . "', '" . $rent . "', '" . $pass . "', '" . $comments . "')";
				$results = mysql_query($addToDb);
				

				/*print($tm . " of " . $year . " at " . $hnum . " " . $street . " " . $city . " " . $state . " " . $zip);
				print("<br>");
				print("Reach us at " . $email . " or " . $phone);
				print("<br>");*/
	
				
			}
			
			


			
			
			


			



			
		}

		if (isset($_POST['button2'])){
			$term = $_POST['one'];
			$year = $_POST['two'];
			$street = $_POST['three'];
			$plow = $_POST['plow'];
			$phigh = $_POST['phigh'];

			//CHECK TO SEE STREET AND PRICE ARE NULL
			print "<script>alert('Scroll down to see your results. Hover over specific listings to see more information.');</script>";

			if ($street == "" && $plow == "" && $phigh == "") {
				# code...
			

				$SQL2 = "SELECT * FROM `table3` WHERE `Term` = '" . $term . "' AND `Year` = '" . $year . "'";
				$result_2 = mysql_query($SQL2);

				if (mysql_num_rows($result_2) == 0) {
					print("<h2>Sorry, no results for " . $term . " of " . $year . "</h2><br><br>
							<h3>But here are results similar to your search or<br> you can check All Available Listings for more options.</h3><br><br>");
					$SQL2 = "SELECT * FROM `table3` WHERE `Term` = '" . $term . "' OR `Year` = '" . $year . "'";
					$result_2 = mysql_query($SQL2);
					$listnum = 1;
					while ( $db_field = mysql_fetch_assoc($result_2) ) {

						if ($listnum % 2 == 1) {
							# code...
							printList1($db_field, $listnum);
						}
						else {
							printList2($db_field, $listnum);
						}
						$listnum += 1;
					}

				}

				else {
					print("<h2 id = 'res'>Search Results</h2><br>");
					$listnum = 1;
					while ( $db_field = mysql_fetch_assoc($result_2) ) {

						if ($listnum % 2 == 1) {
							# code...
							printList1($db_field, $listnum);
						}
						else {
							printList2($db_field, $listnum);
						}
						$listnum += 1;
					}
				}
			}


			//CHECK TO SEE IF ONLY PRICE IS NULL

			if ($street != "" && $plow == "" && $phigh == "") {
				$SQL2 = "SELECT * FROM `table3` WHERE `Term` = '" . $term . "' AND `Year` = '" . $year . "' AND `Street` = '" . $street . "'";
				$result_2 = mysql_query($SQL2);

				if (mysql_num_rows($result_2) == 0) {
					print("<h2>Sorry, no results for " . $term . " of " . $year . " at " . $street . "</h2><br><br>
							<h3>But here are results similar to your search or<br> you can check All Available Listings for more options.</h3><br><br>");
					$SQL2 = "SELECT * FROM `table3` WHERE `Term` = '" . $term . "' AND `Year` = '" . $year . "'";
					$result_2 = mysql_query($SQL2);
					$listnum = 1;
					while ( $db_field = mysql_fetch_assoc($result_2) ) {

						if ($listnum % 2 == 1) {
							# code...
							printList1($db_field, $listnum);
						}
						else {
							printList2($db_field, $listnum);
						}
						$listnum += 1;
					}
				}
				else {
					print("<h2 id = 'res'>Search Results</h2><br>");
					$listnum = 1;
					while ( $db_field = mysql_fetch_assoc($result_2) ) {

						if ($listnum % 2 == 1) {
							# code...
							printList1($db_field, $listnum);
						}
						else {
							printList2($db_field, $listnum);
						}
						$listnum += 1;
					}
				}
			}


			//CHECK TO SEE NONE ARE NULL

			if ($street != "" && $plow != "" && $phigh != "") {
				$SQL2 = "SELECT * FROM `table3` WHERE `Term` = '" . $term . "' AND `Year` = '" . $year . "' AND `Street` = '" . $street . "'";
				$result_2 = mysql_query($SQL2);

				if (mysql_num_rows($result_2) == 0) {
					print("<h2>Sorry, no results for " . $term . " of " . $year . " at " . $street . " between " . $plow . " and " . $phigh . "</h2><br><br>
							<h3>Check All Available Listings for more options</h3><br><br>");
					
				}
				else {
					print("<h2 id = 'res'>Search Results</h2><br>");
					$listnum = 1;
					while ( $db_field = mysql_fetch_assoc($result_2) ) {
						if ($db_field['Rent'] >= $plow && $db_field['Rent'] <= $phigh) {					
							if ($listnum % 2 == 1) {
								# code...
								printList1($db_field, $listnum);
							}
							else {
								printList2($db_field, $listnum);
							}
							$listnum += 1;
						}
					}
				}
			}

			//CHECK TO SEE IF ONLY STREET IS NULL

			if ($street == "" && $plow != "" && $phigh != "") {
				$SQL2 = "SELECT * FROM `table3` WHERE `Term` = '" . $term . "' AND `Year` = '" . $year . "'";
				$result_2 = mysql_query($SQL2);

				if (mysql_num_rows($result_2) == 0) {
					print("<h2>Sorry, no sublease results for " . $term . " of " . $year . " between " . $plow . " and " . $phigh . "</h2><br><br>
							<h3>Check All Available Listings for more options</h3><br><br>");
					
				}

				else {
					print("<h2 id = 'res'>Search Results</h2><br>");
					$listnum = 1;
					while ( $db_field = mysql_fetch_assoc($result_2) ) {
						if ($db_field['Rent'] >= $plow && $db_field['Rent'] <= $phigh) {					
							if ($listnum % 2 == 1) {
								# code...
								printList1($db_field, $listnum);
							}
							else {
								printList2($db_field, $listnum);
							}
							$listnum += 1;
						}
					}
				}
			}
		}
	?>

	
	
</body>
</html>



