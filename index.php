<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Queue</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	
	<!-- queue.js -->
	<script type="text/javascript" src="queue.js"></script>
	
	<!-- Video.js -->
	<link href="video-js/video-js.css" rel="stylesheet">
	<script src="video-js/video.js"></script>
	
	<!-- Google fonts -->
	<link href="http://fonts.googleapis.com/css?family=Sansita+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Kameron" rel="stylesheet" type="text/css">
	
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1 id="title">Queue</h1>
		</div>
		
		<!-- PHP script to grab video files from folder and 
			output the HTML form -->			
		<?php include "script.php"; ?>
		
		<!--Div containing the video player. Hidden at first
			but shown after submit button is pressed -->
		<div id="my_video_player" style="display:none;">
			<video id="video_player1" class="video-js vjs-default-skin"
			  controls preload="auto" width="800" height="600"
			  data-setup='{}'>
			 <source src="" type='video/webm' />
			</video>
		</div>
	</div>
</body>
</html>