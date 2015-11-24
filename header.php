<?php
session_start();
?>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Salsa' rel='stylesheet' type='text/css'>
	  <meta charset="utf-8">
      <meta name="description" content="IMAGES GALLERY">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/blueimp-gallery.css">
      <link rel="stylesheet" href="css/blueimp-gallery-indicator.css">
      <link rel="stylesheet" href="css/demo.css">
      <link rel="stylesheet" type="text/css" href="header.css">
	  <title>ITMO 544 Imagica App</title>
	  </head>
    <body style="margin:0">
		<!-- Header -->
		<div style="height:100px;background-color:LightGray">			
			<div style="width=100%">
				<div style="color:DeepSkyBlue;font-family:'Salsa';font-style:cursive;font-size:200%;font-weight:bold;width:100%;padding:20%;">
					Welcome to Imagica Application
				</div>
				<div style="color:DarkSalmon;font-family:'Salsa';font-style:cursive;font-size:80%;font-weight:bold;height:40px;padding:50%;">
					~ Where memories are stored ~
				</div>
				<div style="padding-left:60%;">
					<ul style="list-style-type:none;margin:0">
					<?php
					if(isset($_SESSION['phone']))
					{
					?>
						<li style="display:inline;padding:10%"><a href="index.php" style="color:FireBrick;font-weight:bold;">Logout</a></li>
						<li style="display:inline;padding:10%"><a href="upload.php" style="color:FireBrick;font-weight:bold;">Upload Image</a></li>
						<li style="display:inline;padding:10%"><a href="gallery.php" style="color:FireBrick;font-weight:bold;">Gallery</a></li>
					<?php
					}
					?>
					</ul>
				</div>
			</div>
		</div>
		