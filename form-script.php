<?php
	$dir = "c:/wamp/www/queue/videos/";
	$dh  = opendir($dir);
	$filename_output = "";
		
	/*For each filename in the directory, create a button.
		We ignore '.', '..', and the thumbnails directory.
	*/
	while (false !== ($filename = readdir($dh))) {
		if ($filename !== "." and $filename !== ".." and $filename !== "thumbnails"){
			$thumbnail = basename($dir . $filename, ".webm") . ".jpg";
			$filename_output .= "<div id=\"videoSection\">";
			$filename_output .= "<button type=\"button\" name=\"videos\" id= \"" . $filename . "\" value=\"" . $filename . "\" onclick=\"addToList(this.value)\"><img class=\"videoThumb\" src=\"videos/thumbnails/" . $thumbnail . "\"></button>";
			$filename_output .= "<p>" . substr($filename, 0, -5) . "</p></div>";
		}
	}
	echo $filename_output;
?>