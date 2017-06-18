(function() {
	var video = document.getElementById('video'),
	vendorUrl = window.URL || window.webkitURL;
	navigator.getmedia = navigator.getUserMedia ||navigator.webkitGetUserMedia ||navigator.mozGetUserMedia ||navigator.msGetUserMedia ;

	navigator.getMedia({
		vedio: true,
		audio: false
	},function(stream) {
		vedio.src =vendorUrl.createObjectURL(stream);
		vedio.play();
	}, function(error) {

	});

}) ();