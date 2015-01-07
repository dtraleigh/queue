<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Queue</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="css/style.css" rel="stylesheet" />
	
	<!-- queue.js -->
	<script type="text/javascript" src="js/queue.js"></script>
	<script type="text/javascript" src="queue.js"></script>
	
	<!-- Video.js -->
	<link href="video-js/video-js.css" rel="stylesheet" />
	<script src="video-js/video.js" type="text/javascript"></script>
	
	<!-- Google fonts -->
	<link href="http://fonts.googleapis.com/css?family=Sansita+One" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Kameron" rel="stylesheet" type="text/css" />
	
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1 id="title">Queue</h1>
		</div>
		
		<div id="content">
			<form id="queue-form" name="queue" action="javascript:play()">
			<div id="left-content">
				<!-- PHP script to grab video files from folder and 
					output the HTML form info -->
				<?php include "form-script.php"; ?>
			</div>
			<div id="right-content">
				<div id="start-and-list">
					<!-- Here, we output the submit button -->
					<?php include "form-submit-script.php"; ?>
					
					<!-- List the selected videos in order. -->
					<div id="selected">
					
					</div>
				</div>
			</div>
			</form>
		</div>		
		<!--Div containing the video player. Hidden at first
			but shown after submit button is pressed -->
		<div id="my_video_player" style="display:none;">
			<video id="video_player1" class="video-js vjs-default-skin"
			  controls preload="auto" width="600" height="500"
			  controls preload="auto" width="800" height="600"
			  data-setup='{}'>
			 <source src="" type='video/webm' />
			</video>
		</div>
	</div>
</body>
</html>