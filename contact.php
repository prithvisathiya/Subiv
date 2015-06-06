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
</head>
<body>	
	<ul id="menu">
		<li>
			<a  class="menitem" href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="available.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Available Listings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a class="menitem" href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>||
			<a id="active" class="menitem" href="contact.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		</li>
	</ul>
	<br>
	<br>
	<br>
	<h1>Contact Info:</h1>
	
	<pre>For any questions or concerns, Please feel free to reach me at
	prithvisathiya@gmail.com or 858-663-6678. 

	This is a temporary site. Further improvements will soon follow such as user accounts and option
	to upload pictures.


	For any other comments, you're more than welcome to post it below...
	Feedback is always appreciated</pre><br><br>
	<div id = "feed">
		<form method="post" action="contact.php" >
			<input type="text" name = "person" id="feedperson" placeholder = "Name"><br>
			<input type="text" name = "email" id="feedperson" placeholder = "Your Email"><br>
			<textarea id = "feedback"name="comments" cols="50" rows="10" placeholder = "Enter comments here:"></textarea><br>
			<input type="submit" name="button6" value="Submit">
		</form>
	</div>

	<?php  
		if (isset($_POST['button6'])) {

			$db_handle = mysql_connect("localhost", "subiwhlu_prithvi", "Arbor1994");
			$db_tf = mysql_select_db("subiwhlu_subleaseList", $db_handle);

			$name = mysql_real_escape_string($_POST['person']);
			$email = mysql_real_escape_string($_POST['email']);
			
			$message = mysql_real_escape_string($_POST['comments']);

			$query = "INSERT INTO `mailtable` (Name, Email, Message) VALUES ('" . $name . "', '" . $email . "', '" . $message . "')";
			$result = mysql_query($query);

			if ($result) {
				# code...
			
				print("<script>alert('Your comments have been sent. Thanks!');</script>");
			}
		}
	?>
</body>
</html>