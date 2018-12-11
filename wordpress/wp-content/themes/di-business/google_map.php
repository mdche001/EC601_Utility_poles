<?php /* Template Name: google_map */ ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {

      	var my_position = {lat: 42.4240614, lng: -71.0176409}//42.342867 -71.115656 

        map = new google.maps.Map(document.getElementById('map'), {
          center: my_position,
          zoom: 18
        });
        // var color_red = "http://localhost/images/webcap/venv/icon/redicon.png"
        // var color_green = "http://localhost/images/webcap/venv/icon/greenicon.png"

        var Pole1_in = new google.maps.Marker({
          position: {lat: 42.42416741362743, lng: -71.01743560206239},
          map: map,
          title: 'Pole1',
        });

        
        // var image = new google.maps.MarkerImage(icon,
        //       new google.maps.Size(32, 32),
        //       new google.maps.Point(0,0),
        //       new google.maps.Point(16, 16));

        var Pole2_in = new google.maps.Marker({
          position: {lat: 42.42410188547021, lng: -71.0175319405858}, 
          map: map,
          title: 'Pole2'
        }); 

        var Pole3_in = new google.maps.Marker({
          position: {lat: 42.42456520160504, lng: -71.01687977068002}, 
          map: map,
          title: 'Pole3'
        });         

        var Pole4_in = new google.maps.Marker({
          position: {lat: 42.42496065223564, lng: -71.01631926712645},  
          map: map,
          title: 'Pole4'
        }); 

        var Pole5_in = new google.maps.Marker({
          position: {lat: 42.42508936086634, lng: -71.01613956717205}, 
          map: map,
          title: 'Pole5'
        }); 

        var Pole6_in = new google.maps.Marker({
          position:{lat: 42.42515324886097, lng: -71.01604978647293},  
          map: map,
          title: 'Pole6'
        }); 

        var Pole7_in = new google.maps.Marker({
          position:{lat: 42.42529369788811, lng: -71.01585003057676}, 
          map: map,
          title: 'Pole7'
        });         
        // map.addListener('center_changed', function() {
        //   // 3 seconds after the center of the map has changed, pan back to the
        //   // marker.
        //   window.setTimeout(function() {
        //     map.panTo(marker.getPosition());
        //   }, 3000);
        // });

        // marker.addListener('click', function() {
        //   map.setZoom(8);
        //   map.setCenter(marker.getPosition());
        // });

        // marker.addListener('click', function(event) {
        //   document.getElementById('latlongclicked').value = event.latLng.lat()
        //   document.getElementById('lotlongclicked').value =  event.latLng.lng()
        //   if (document.getElementById('latlongclicked').value)
        //   {
        //       document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
        //       document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
        //   }
        //   var x = event.latLng.lat()//43.333
        //   var y = event.latLng.lng()//33.5333223
        //   document.Coord.latlongclicked.value = x
        //   document.Coord.lotlongclicked.value = y
        // });        

        google.maps.event.addListener(Pole1_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        });

        google.maps.event.addListener(Pole2_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        });        

        google.maps.event.addListener(Pole3_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        });

        google.maps.event.addListener(Pole4_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        });

        google.maps.event.addListener(Pole5_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        });

        google.maps.event.addListener(Pole6_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        });

        google.maps.event.addListener(Pole7_in,'click',function(event) {
                 document.getElementById('latlongclicked').value = event.latLng.lat()
                 document.getElementById('lotlongclicked').value =  event.latLng.lng()
                 if (document.getElementById('latlongclicked').value)
                 {
                      document.getElementById("latlongclicked").innerHTML = event.latLng.lat();
                      document.getElementById('lotlongclicked').innerHTML = event.latLng.lng()
                 }
                 var x = event.latLng.lat() //43.333
                 var y = event.latLng.lng() //33.5333223
                 document.Coord.latlongclicked.value = x
                 document.Coord.lotlongclicked.value = y
                 // alert(document.Coord.latlongclicked.value, document.Coord.lotlongclicked.value)          

        }); 
      }
    </script>

    <form  name="Coord" action="http://localhost/wordpress/validate" method="post">
        <input type="hidden" name="latlongclicked"><br />
        <input type="hidden" name="lotlongclicked"><br />
        <input type="submit" value="Submit info">
    </form>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpYdHJXDsByckC1aeA8MThdLsGaVIh9AI&callback=initMap"
    async defer></script>


    <!-- <div class="field">
    <input type="text" id="imagedata" name="imagedata" class="input tips" style="width:25%; float:left;" data-toggle="hover" data-place="right" readonly="readonly" />
    <input type="file" onchange="selectImage(this);" id="image" name="image" class="button bg-blue margin-left" value="+ 浏览上传" style="float:left;" >
    <img id="imagedisplay" src="" class="img-news" alt="图片尺寸：205*140"style="margin-left:50px;" />
</div>

<script>
    var image = '';
    function selectImage(file) {
        if (!file.files || !file.files[0]) {
            return;
        }
        var reader = new FileReader();
        reader.onload = function (evt) {
      // 将图片显示在id为imagedisplay的img
            document.getElementById('imagedisplay').src = evt.target.result;
            // 将图片的base64数据存在id为imagedata的一个文本框
            document.getElementById('imagedata').value = evt.target.result.toString();
        }
        reader.readAsDataURL(file.files[0]);
    }
</script> -->




  <p id=latlongclicked></p>
	<p id=lotlongclicked></p>

  </body>
</html>

