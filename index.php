<!DOCTYPE html>
<html>
<head>
	<title>Palm | Map</title>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<!--Google Map JavaScript API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5Kxn5lLvvOqc36Wx-dZ3H_3JaRCh2ryA"></script>
	<!-- JavaScript code in the web page, specifying multiple or single locations with markers-->
<script>
 // Marker location, latitude, and longitude
var myCenter = new google.maps.LatLng(-4.061512, 39.666144);
function initialize(){
    var mapProp = {
        center:myCenter,
        zoom:12,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
     // Display a map on the web page
    var map = new google.maps.Map(document.getElementById("map"),mapProp);

    var marker = new google.maps.Marker({
        position:myCenter,
    });

    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style type="text/css">
	#map {width: 100%;height: 400px;}
.mapContainer{width:50%;position: relative;}
.mapContainer a.direction-link {
    position: absolute;
    top: 15px;
    right: 15px;
    z-index: 100010;
    color: #FFF;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    line-height: 25px;
    padding: 8px 20px 8px 50px;
    background: #0094de;
    background-image: url('direction-icon.png');
    background-position: left center;
    background-repeat: no-repeat;
}
.mapContainer a.direction-link:hover {
    text-decoration: none;
    background: #0072ab;
    color: #FFF;
    background-image: url('direction-icon.png');
    background-position: left center;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
<div id="map"></div>
<div class="mapContainer">
    <a itemprop="url" class="direction-link" target="_blank" href="//maps.google.com/maps?f=d&amp;daddr=37.422230,-122.084058&amp;hl=en"> See Directions</a>
    <div id="map"></div>
</div>
</body>
</html>