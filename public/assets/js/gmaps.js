
function initialize() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(41.60059,2.286487),
    disableDefaultUI: true
  };
  var map = new google.maps.Map(document.getElementById('mapas'),
                                mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);
