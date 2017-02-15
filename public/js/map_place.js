var placeId = document.getElementById("map_place_id").value;
$.ajax({
    url: '../PlaceController/getMapPlace',
    type: 'POST',
    data: {
        place: placeId,
    },
    dataType: 'json',
    cache: false,
    success: function (locations) {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: new google.maps.LatLng(locations[1], locations[2]),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();



        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[1], locations[2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[0]);
                infowindow.open(map, marker);
            }
        })(marker, 0));
    }
});

