$(document).on("ready", configuracionApp);

function configuracionApp () {
	var canvas = document.getElementById("miCanvas");
	var ctx = canvas.getContext("2d");
	canvas.width = screen.availWidth;
}