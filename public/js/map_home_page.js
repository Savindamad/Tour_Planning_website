var tatitude = parseFloat(document.getElementById('latitude').value);
var longitude = parseFloat(document.getElementById('longitude').value);

var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: new google.maps.LatLng(tatitude, longitude),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();



var marker = new google.maps.Marker({
    position: new google.maps.LatLng(tatitude, longitude),
    map: map
});

google.maps.event.addListener(marker, 'click', (function (marker, i) {
    return function () {
        infowindow.setContent(locations[0]);
        infowindow.open(map, marker);
    }
})(marker, 0));