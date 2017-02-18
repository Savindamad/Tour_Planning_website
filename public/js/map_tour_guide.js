var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: new google.maps.LatLng(7.8731, 80.7718),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;
var locations = [];

function addPlace(id, placeId) {
    var flag = 0;
    for (i = 0; i < locations.length; i++) {
        if (locations[i][0] == placeId) {
            flag = 1;
            break;
        }
    }

    if (flag == 0) {
        for (i = 0; i < locations.length; i++) {
            if (locations[i][1] == id) {
                for (j = 0; j < locations.length; j++) {
                    if (locations[i][0] == locations[j][0] && j != i) {
                        flag = 2;

                        $.ajax({
                            url: 'TourGuideController/getPlace',
                            type: 'POST',
                            dataType: 'json',
                            cache: false,
                            data: {
                                placeId: placeId
                            },
                            success: function (result) {

                            }
                        });


                        break;
                        //add map
                        //not remove
                    }
                }
                if (flag == 0) {
                    flag = 3

                    $.ajax({
                        url: 'TourGuideController/getPlace',
                        type: 'POST',
                        dataType: 'json',
                        cache: false,
                        data: {
                            placeId: placeId
                        },
                        success: function (result) {

                        }
                    });
                    //add map
                    //remove map
                    //remove array
                }
            }
        }
        if (flag == 0) {

            $.ajax({
                url: 'TourGuideController/getPlace',
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {
                    placeId: placeId
                },
                success: function (result) {

                }
            });
            //add array
            //add map
        }
    }


    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}