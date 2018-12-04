
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

var map, infoWindow;

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 43.4683, lng: -79.6994},
		zoom: 18
		});
	infoWindow = new google.maps.InfoWindow;

	var contentString =
		'<div id="content">'+
			'<div id="siteNotice">'+
		'</div>'+
		'<h1 id="firstHeading" class="firstHeading">Hooray!</h1>'+
		'<div id="bodyContent">'+
			'<p><b>Your location</b> was now <b>found.</b></p>' +
			'<p><b>Location:</b> "<?php echo($row["pos"]); ?>"</p>' +
		'</div>'+
		'</div>';

	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		map: map,
		title: 'Geolocation Marker!'
	});
	marker.addListener('click', function() {
		infowindow.open(map, marker);
	});

	// Try HTML5 geolocation.
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};
			console.log(pos);

			marker.setPosition(pos);
			map.setCenter(pos);
		},
		function() {
			handleLocationError(true, infoWindow, map.getCenter());
		});
	} else {
		// Browser doesn't support Geolocation
		handleLocationError(false, infoWindow, map.getCenter());
	}
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(
		browserHasGeolocation ?
		'Error: The Geolocation service failed.' :
		'Error: Your browser doesn\'t support geolocation.'
	);
	infoWindow.open(map);
}
