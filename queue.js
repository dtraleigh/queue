/*Queue
*/

var list = [];
counter = 0;

/*addToList() takes the filename and add it to the array 'list'.
	This function should fire each time a button is pressed.
*/
function addToList(filename){
	list.push(filename);
	document.getElementById(filename).style.background = "green";
}

/*play() should fire when the submit button is pressed. It uses the Video.js API
	to manipulate the player.
*/
function play(){
	document.getElementById('my_video_player').style.display = "block";
	var player = videojs("video_player1");
	
	player.src('videos/' + list[counter]);
	player.play();
	
	var myFunc = function(){
		var player = videojs("video_player1");
		counter++;
		
		if (counter < list.length){
			player.src('videos/' + list[counter]);
			player.play();
		}
	};

	player.on("ended", myFunc);
}

