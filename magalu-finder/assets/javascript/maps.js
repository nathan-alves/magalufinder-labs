function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 6
    });
    var infoWindow = new google.maps.InfoWindow({map: map});
    if ("geolocation" in navigator) {
    } else {
      alert("I'm sorry, but geolocation services are not supported by your browser.");
    }
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
  
      navigator.geolocation.getCurrentPosition(function(position) {
        
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        document.getElementById('Latitude').value=position.coords.latitude
        document.getElementById('Longitude').value=position.coords.longitude
        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
  
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  }
  
  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    document.getElementById('Latitude').value='';
    document.getElementById('Longitude').value='';
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'Error: The Geolocation service failed.' :
                          'Error: Your browser doesn\'t support geolocation.');
  }