<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>blazingescapes.com</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/Contact_Page_Form.css">
		<link href='http://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Changa+One' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Tours</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="#">Pay for Services</a></li>
					<li><a  id="Tab" href="contact.html">Contact Us</a></li>
				</ul>
			</nav>
			<a href="index.html">
				<!--<img id="logo" src="img/TheSunLogo1.1.png" alt="The Sun logo">-->
				<canvas width="95" height="196"></canvas>
				<script src="js/sunAnime.js"></script>
				<h1>BlazingEscapes</h1>
			</a>
		</header>
		<div id="wrapper">
			<section>
				<h1>Contact</h1>
				<h2>For more information contact us either by phone or email</h2>
				<ul>
					<li><p><div class="unicode">&#9742</div> 000-000-0000</p></li>
					<li><p>Email<p></li>
				</ul>
				<?php include('inc/mail.php');  ?>
				<form action="contact.php" method="post">	
					<label for="name">Name</label>
						<input type="text" id="name" name="user_name">
					<label for="email">Email</label>
						<input type="email" id="email" name="user_email">
					<label for="message">Message</label>
						<textarea id="message" name="msg"></textarea>
					<button type="submit" name="submit">Submit</button>
				</form>
			</section>
			<footer>
				<p>&copy; 2014 Children's Music Aid Society. All rights reserved</p>
				<p>Site created by Weslee Galloway</p>
			</footer>
		</div>
	</body>
</html>
