var map;

function initialize() {
  var mapOptions = {
    zoom: 5,
	center: new google.maps.LatLng(24.126208, -97.741941),
	mapTypeId: google.maps.MapTypeId.TERRAIN
}
  
 map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	setMarkers(map,cities);
}
  
 
	  
  var cities = [
  ['Ojeda Processing Plant', 24.126208, -97.741941,'images/iPlant.png', '#Ojeda'],
  ['Arana Spar ',25.685376, -94.909758,'images/iSpar.png', '#Arana'],
  ['Quiroga Rig ', 22.277888, -94.787785,'images/iRig.png', '#Quiroga'],
  ['Orizba Rig ', 23.272791, -92.991155,'images/iRig.png', '#Orizba'],
  
];

   
									 
	function setMarkers(map,cities){
			
	
	for (var i = 0; i < 4; i++) {
    var gor = cities[i];
    var myLatLng = new google.maps.LatLng(gor[1],gor[2]);
	var contentData = '<div class="infoWin"><strong>' + gor[0] + '</strong><p>' + gor[1] + '° Latitude <br>' + gor[2] + '° Longitude</p><a href="'+gor[4]+'" title="More Info" target="_self">More Info</a></small></div>';
    var infowindow = new google.maps.InfoWindow();
	var image = {
		url: gor[3], 
		origin: new google.maps.Point(0,0), 
		anchor: new google.maps.Point(18, 18)
};
	var marker = new google.maps.Marker({
		map:map,
    	position: myLatLng,
    	icon: image,
        title: gor[0],
		content: contentData,
		anchor: new google.maps.Point(18, 18)
        });
	google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(this.content);
    infowindow.open(map, this);
        });
	
	};
	};
	
	function calcRoute() {
    var start = document.getElementById('start').value;
    var startComma = start.indexOf(',');
    var startLat = parseFloat(start.substring(0, startComma));
    var startLong = parseFloat(start.substring(startComma + 1, start.length));
    var startPoint = new google.maps.LatLng(startLat, startLong);

    var end = document.getElementById('end').value;
    var endComma = end.indexOf(',');
    var endLat = parseFloat(end.substring(0, endComma));
    var endLong = parseFloat(end.substring(endComma + 1, end.length));
    var endPoint = new google.maps.LatLng(endLat, endLong);


    function calcDistance(){
        return Math.round(google.maps.geometry.spherical.computeDistanceBetween(startPoint, endPoint) / 1000);
    }
    document.getElementById("calcDistanceOutput").innerHTML = (calcDistance()) + ' km';
	
	var route = [startPoint, endPoint];
    var polyline = new google.maps.Polyline({
        path: route,
        strokeColor: "#ef3e36"
    });

    polyline.setMap(map);
};
	google.maps.event.addDomListener(window, 'load', initialize);
 
  
	
	
	
	
	
	
	
	
	
	
	
	
  