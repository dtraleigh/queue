/*Queue*/

var list = [];
counter = 0;

/*addToList() takes the filename and add it to the array 'list'.
	This function should fire each time a button is pressed.
*/
function addToList(filename){
	list.push(filename);
	document.getElementById(filename).style.background = "green";
	
	/* Update the list of selected videos  */
	addToSelectedList();
}

/*addToSelectedList() updates the list of selected videos shown in the
	right content area.*/

function addToSelectedList(){
	var selectedList = "<ol class=\"rounded-list\">";
	
	for (i = 0; i < list.length; i++) {
		selectedList +=  "<li><a href=\"\" id=\"selected" + i + "\">" + list[i].substring(0, list[i].length-5) + "</a></li>";
	}
	
	selectedList += "</ol>";
	
	document.getElementById("selected").innerHTML = selectedList;
}

/*play() should fire when the submit button is pressed. It uses the Video.js API
	to manipulate the player.
*/
function play(){
	document.getElementById('my_video_player').style.display = "block";
	var player = videojs("video_player1");
	
	player.src('videos/' + list[counter]);
	player.play();
	
	/*  Turn the currently playing video yellow (EDE888) */
	var selectedVideo = "selected" + counter;
	document.getElementById(selectedVideo).style.background = "#EDE888";
	
	var myFunc = function(){
		var player = videojs("video_player1");
		counter++;
		
		if (counter < list.length){
			player.src('videos/' + list[counter]);
			player.play();
			
			/*  Turn the next playing video yellow (EDE888)) */
			var selectedVideo = "selected" + counter;
			document.getElementById(selectedVideo).style.background = "#EDE888";
		}
		
		/*  Turn the previously played videos green (C7F2B5) */
		for (i = 0; i < counter; i++) {
			var finishedVideo = "selected" + i;
			document.getElementById(finishedVideo).style.background = "#C7F2B5";
			if (counter == list.length){
				location.reload();
			}
		}
	};

	player.on("ended", myFunc);
}

