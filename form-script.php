<?php
	$dir = "videos/";
	$dh  = opendir($dir);
	$filename_output = "";
		
	/*For each filename in the directory, create a button.
		We ignore '.', '..', and the thumbnails directory.
	*/
	while (false !== ($filename = readdir($dh))) {
		if ($filename !== "." and $filename !== ".." and $filename !== "thumbnails" and $filename !== "backup"){
			//If .webm
			if (strpos($filename,'.webm') !== false) {
				$thumbnail = basename($dir . $filename, ".webm") . ".jpg";
				$filename_output .= "<div id=\"videoSection\">";
				$filename_output .= "<button type=\"button\" name=\"videos\" id= \"" . $filename . "\" value=\"" . $filename . "\" onclick=\"addToList(this.value)\"><img class=\"videoThumb\" src=\"videos/thumbnails/" . $thumbnail . "\"></button>";
				$filename_output .= "<p>" . $filename . "</p></div>";
			}
			//If .mp4
			if (strpos($filename,'.mp4') !== false) {
				$thumbnail = basename($dir . $filename, ".mp4") . ".jpg";
				$filename_output .= "<div id=\"videoSection\">";
				$filename_output .= "<button type=\"button\" name=\"videos\" id= \"" . $filename . "\" value=\"" . $filename . "\" onclick=\"addToList(this.value)\"><img class=\"videoThumb\" src=\"videos/thumbnails/" . $thumbnail . "\"></button>";
				$filename_output .= "<p>" . $filename . "</p></div>";
			}
		}
	}
	echo $filename_output;
?>