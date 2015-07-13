<?php // Header ?>
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
					<li><a <?php if ($page == 'home') echo ' id="Tab" ' ?> href="index.php">Home</a></li>
					<li><a href="#">Tours</a></li>
					<li><a <?php if ($page == 'about') echo ' id="Tab" ' ?> href="about.php">About</a></li>
					<li><a <?php if ($page == 'gallery') echo ' id="Tab" ' ?> href="gallery.php">Gallery</a></li>
					<li><a <?php if ($page == 'contact') echo ' id="Tab" ' ?> href="contact.php">Contact Us</a></li>
					<!--<li><a id="Tab" href="index.php">Home</a></li>-->
				</ul>
			</nav>
			<a href="index.php">
				<img id="logo" src="img/TheSunLogo1.1.png" alt="The Sun logo">
				<!--<canvas width="95" height="196"></canvas>-->
				<!--<script src="js/sunAnime.js"></script>-->
				<h1>BlazingEscapes</h1>
			</a>
		</header>
		<div id="wrapper">
