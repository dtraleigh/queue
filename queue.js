/*Queue*/

var list = [];
counter = 0;

function addToList(filename){
	//document.write("Did addToList() fire?");
	list.push(filename);
	document.getElementById(filename).style.background = "green";
}

function play(){
	//document.write("Did play() fire?");
	//for (counter=0; counter<list.length; counter++)
	//	document.write(list[counter] + "<br>");
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

