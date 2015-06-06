<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="sublease.css">
	<script type="text/javascript" src = "jquery-2.1.0.js"></script>
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
	<h1>All Listings</h1><br><br>
	<form method="get" action="available.php" >
		Sort By: <select name="sort">
			<option value = "Mostrec">Date Posted (Most recent - Least)</option>
			<option value="Leastrec">Date Posted (Least recent - Most)</option>
			<option value="Lowest">Price (Lowest - Highest) </option>
			<option value="Highest">Price (Highest - Lowest)</option>
		</select>
		<input type="submit" name="button3" value="Sort">
	</form><br>

	<?php 
		$db_handle = mysql_connect("localhost", "subiwhlu_prithvi", "Arbor1994");
		$db_tf = mysql_select_db("subiwhlu_subleaseList", $db_handle);


		if (!isset($_GET['button3'])) {
			print("Hover over specific listings to see more information.<br>");
			print("Showing most recent...<br><br><br>");

			$alldef = "SELECT * FROM `table3` ORDER BY ID DESC";
			$result = mysql_query($alldef);

			$listnum = 1;
			while ($db_field = mysql_fetch_assoc($result)) {
				if (strlen($db_field['Phone']) == 10){
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






		if (isset($_GET['button3'])) {
		 	# code...
		 	if ($_GET['sort'] == 'Mostrec') {
		 		print("Hover over specific listings to see more information.<br>");
				print("Showing most recent...<br><br><br>");


				$all = "SELECT * FROM `table3` ORDER BY ID DESC";
				$result = mysql_query($all);

				$listnum = 1;
				while ($db_field = mysql_fetch_assoc($result)) {
					if (strlen($db_field['Phone']) == 10){
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



			else if ($_GET['sort'] == 'Leastrec') {
				print("Hover over specific listings to see more information.<br>");
				print("Showing least recent...<br><br><br>");


				$all = "SELECT * FROM `table3` ORDER BY ID";
				$result = mysql_query($all);

				$listnum = 1;
				while ($db_field = mysql_fetch_assoc($result)) {
					if (strlen($db_field['Phone']) == 10){
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



			else if ($_GET['sort'] == 'Lowest') {
				print("Hover over specific listings to see more information.<br>");
				print("Showing lowest price...<br><br><br>");


				$all = "SELECT * FROM `table3` ORDER BY Rent";
				$result = mysql_query($all);

				$listnum = 1;
				while ($db_field = mysql_fetch_assoc($result)) {
					if (strlen($db_field['Phone']) == 10){
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

			else if ($_GET['sort'] == 'Highest') {
				print("Hover over specific listings to see more information.<br>");
				print("Showing highest price...<br><br><br>");


				$all = "SELECT * FROM `table3` ORDER BY Rent DESC";
				$result = mysql_query($all);

				$listnum = 1;
				while ($db_field = mysql_fetch_assoc($result)) {
					if (strlen($db_field['Phone']) == 10){
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
	?>
</body>
</html>