<?php
	$dir = "c:/wamp/www/queue/videos/";
	$thumbdir = "c:/wamp/www/queue/videos/thumbnails/";
	$dh  = opendir($dir);
	$filename_output = "";
	
	echo "<form name=\"queue\" action=\"javascript:play()\">";
	
	while (false !== ($filename = readdir($dh))) {
		if ($filename !== "." and $filename !== ".." and $filename !== "thumbnails"){
			$thumbnail = basename($dir . $filename, ".webm") . ".jpg";
			$filename_output .= "<div id=\"videoSection\">";
			/*$filename_output .= "<input type=\"button\" id=\"videoThumb\" src=\"videos/thumbnails/" . $thumbnail . "\" name=\"videos\" value=\"" . $filename . "\" onclick=\"addToList(this.value);\">";*/
			$filename_output .= "<button type=\"button\" name=\"videos\" id= \"" . $filename . "\" value=\"" . $filename . "\" onclick=\"addToList(this.value)\"><img class=\"videoThumb\" src=\"videos/thumbnails/" . $thumbnail . "\"></button>";
			$filename_output .= "<p>" . $filename . "</p></div>";
		}
	}
	echo $filename_output;
	echo "<input type=\"submit\" id=\"startButton\" value=\"Start Your Workout!\" >";
	echo "</form>";
?>