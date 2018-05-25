function initMap() {

  var myLatLng = {lat: document.getElementById("lat").value, lng: document.getElementById("long".value)};

  var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: myLatLng
    });

  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
    });
}