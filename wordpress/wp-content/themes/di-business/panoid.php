<?php /* Template Name: pano */ ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Street View Containers</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #street-view {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="street-view"></div>
    <script>
      var panorama;
      function initialize() {
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view'),
            {
              position: {lat: 37.869260, lng: -122.254811},
              pov: {heading: 165, pitch: 0},
              zoom: 1
            });
		var sv = new google.maps.StreetViewService();
	    sv.getPanoramaById("j4hoo5S1qH1x3E0ZJ3hL1g", processSVData);
	    function processSVData(data, status) {
	    alert(data.location.latLng);//42.4249606,-71.0163192 //42.4241674,-71.0174356
	    }      

      }
		     
    </script>
    <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpYdHJXDsByckC1aeA8MThdLsGaVIh9AI&callback=initialize">
    </script>
  </body>
</html