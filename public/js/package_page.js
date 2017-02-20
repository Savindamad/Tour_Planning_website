function getHotelsPackage(packageId, star) {
    $.ajax({
        url: '../PackageController/getHotelInfo',
        type: 'POST',
        data: {
            packageId: packageId,
            star: star
        },
        dataType: 'json',
        cache: false,
        success: function (result) {
            for (i = 0; i < result.length; i++) {
                var hId = result[i].h_id;
                var rId = result[i].r_id;
                var sId = result[i].s_id;
                var hotels = result[i].hotels;
                var rooms = result[i].rooms;

                $('#' + hId).html(hotels);
                $('#' + rId).html(rooms);
                document.getElementById(sId).value = star;
            }
        }
    });
}

function getHotelsPlace(placeId, star) {
    $.ajax({
        url: '../PackageController/getHotelPlaceInfo',
        type: 'POST',
        data: {
            placeId: placeId,
            star: star
        },
        dataType: 'json',
        cache: false,
        success: function (result) {
            var hotels = result[0].hotels;
            var rooms = result[0].rooms;

            $('#h_' + placeId).html(hotels);
            $('#r_' + placeId).html(rooms);
        }
    });
}

function submitFunc(packageId, numPlaces) {
    if (validateForm()) {
        var email = document.getElementById("email").value;
        var country = document.getElementById("country").value;
        var mobile = document.getElementById("mobile").value;
        var numPersons = document.getElementById("numPersons").value;
        var singleRooms = document.getElementById("single").value;
        var doubleRooms = document.getElementById("double").value;
        var tribleRomms = document.getElementById("trible").value;

        var placesInfo = [];

        $.ajax({
            url: '../PackageController/getAllPlacesId',
            type: 'POST',
            data: {
                packageId: packageId,
            },
            dataType: 'json',
            cache: false,
            success: function (result) {
                for (var i = 0; i < result.length; i++) {
                    var placeId = result[i];
                    var temp = [];
                    temp['id'] = placeId;
                    temp['hotelId'] = document.getElementById("h_" + placeId).value;
                    placesInfo[i] = temp;
                }
                $.ajax({
                    url: '../PackageController/setPackageData',
                    type: 'POST',
                    data: {
                        email: email,
                        country: country,
                        mobile: mobile,
                        numPersons: numPersons,
                        singleRooms: singleRooms,
                        doubleRooms: doubleRooms,
                        tribleRomms: tribleRomms,
                        hotelInfo: placesInfo
                    },
                    success: function (result) {

                    }
                });
            }
        });

        var submitResult = '<div class="container-fluid" id="content" style="margin-top: 20px; margin-bottom: 20px;">\n\
                                <div class="row">\n\
                                    <div class="col-md-1">\n\
                                    </div>\n\
                                    <div class="col-md-10" style="background-color: #f6f6f6; border-radius: 5px;">\n\
                                        <div class="row" style="margin-top: 10px;">\n\
                                            <div class="col-md-12">\n\
                                                <div class="row" style="margin : 20px">\n\
                                                <h3>Topic</h3>\n\
                                                <p>Description</p>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>\n\
                            </div>';
        $('#content').html(submitResult);

    }
}

function validateForm() {
    return true;
}


