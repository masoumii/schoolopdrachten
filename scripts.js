var playVideo = document.querySelector(".player__video");
var buttontje = document.querySelector("#playToggle");
var myVideo   = document.querySelector(".player__video"); 

// Play & pause video controls
function afspelen(){
// als video gepauzeerd is, speel af als erop is geklikt
if (myVideo.paused) {
	myVideo.play(); 

	playToggle.textContent = "||";
}
// Als video aan het afspelen is, pauzeer als erop is geklikt
else { 
	myVideo.pause();
	playToggle.textContent = ">";

}

}

// Volume wijzigen
window.SetVolume = function(val)
{
	var player = document.getElementById('video');
	player.volume = val;
	console.log('Huidige volume: ' + player.volume*100);
	//document.getElementById("pbr").innerHTML = "afspeelsnelheid: " + player.volume*100;
}


// video afspeelsnelheid wijzigen
window.SetPlayBackRate = function(val)
{
	var player = document.getElementById('video');
	player.playbackRate = val;
	console.log('Huidige afspeelsnelheid: ' + player.playbackRate);
}

// video doorspoelen
function skip(value) {
	var video = document.getElementById("video");
	video.currentTime += value;
}  

// video terugspoelen
function back(value) {
	var video = document.getElementById("video");
	video.currentTime += value;
}      
