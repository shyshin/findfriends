<!<?php
include ("./inc/connect.inc.php"); 
session_start();
?>
<!doctype html>
<html>
	<head>
		<title> Find Friends </title>
		<link rel = "stylesheet" type="text/css" href="./css/style.css" />
	</head>
	<body>
		<div class = "headerMenu">
			<div id = "wrapper">
				<div class = "logo">
					<img src = "./img/friends_logo.png" />
				</div>
				<div class = "search_box">
					<form action = "https://google.com/search" method = "GET" id="search">
						<input type = "text" name = "q" size="60" placeholder = "Search ...">
					</form>
				</div>
				<div id="menu">
					<a href=""/> Home </a>
					<a href=""/> About </a>
					<a href=""/> Sign In </a>
					<a href=""/> Sign Up </a>
				</div>
			</div>
		</div>
		<div id="wrapper">
		<br \>
		<br \>
		<br \>
		<br \>
		<br \>
