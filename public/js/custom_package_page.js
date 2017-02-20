var numPlaces = document.getElementById("numDays").value;
var placeId = document.getElementById("p_1").value;
var star = document.getElementById("s_1").value;

$.ajax({
    url: 'CustomPackageController/getHotels',
    type: 'POST',
    data: {
        placeId: placeId,
        star: star
    },
    success: function (responseText) {
        $('#h_1').html(responseText);
        $('#h_2').html(responseText);
    }
});

function getHotelsStar(star) {
    var numPlaces = document.getElementById("numDays").value;
    var places = [];
    for (var i = 1; i <= numPlaces; i++) {
        var placeId = document.getElementById("p_" + i).value;
        places[i - 1] = placeId;
    }

    var starHtml = "<option value='STANDARD'>Standard</option>\n\
                    <option value='DELUX'>Delux</option>";
    if (star == "FIVE") {
        starHtml = starHtml + "<option value='SWEET'>Sweet</option>";
    }

    $.ajax({
        url: 'CustomPackageController/getHotelsStar',
        type: 'POST',
        data: {
            places: places,
            star: star
        },
        dataType: 'json',
        cache: false,
        success: function (result) {
            for (i = 1; i <= result.length; i++) {
                $('#h_' + i).html(result[i - 1]);
                document.getElementById("s_" + i).value = star;
                $('#r_' + i).html(starHtml);
            }
        }
    });

}
function getPlaceHotels(id) {
    var placeId = document.getElementById("p_" + id).value;
    var star = document.getElementById("s_" + id).value;

    $.ajax({
        url: 'CustomPackageController/getPlaceHotels',
        type: 'POST',
        data: {
            placeId: placeId,
            star: star
        },
        success: function (responseText) {
            $('#h_' + id).html(responseText);
        }
    });
}
function getPlaceHotelsStar(id) {
    var placeId = document.getElementById("p_" + id).value;
    var star = document.getElementById("s_" + id).value;

    var starHtml = "<option value='STANDARD'>Standard</option>\n\
                    <option value='DELUX'>Delux</option>";

    if (star == "FIVE") {
        starHtml = starHtml + "<option value='SWEET'>Sweet</option>";
    }

    $.ajax({
        url: 'CustomPackageController/getPlaceHotels',
        type: 'POST',
        data: {
            placeId: placeId,
            star: star
        },
        success: function (responseText) {
            $('#h_' + id).html(responseText);
            $('#r_' + id).html(starHtml);
        }
    });
}

function changeNumDays(numDays) {
    var numDaysPrv = document.getElementById("numDays1").value;
    var numDaysPrvInt = parseInt(numDaysPrv);
    if (numDays < 2 || numDays > 30) {
        if (numDays < 2) {
            document.getElementById("numDays").value = 2;
            if (numDaysPrvInt != 2) {
                for (var i = numDaysPrvInt; i > 2; i--) {
                    $('#d_' + i).fadeOut(500);
                    document.getElementById("numDays1").value = 2;
                }
            }
        } else {
            document.getElementById("numDays").value = 30;
            if (numDaysPrvInt != 30) {
                
                var numDaysAdd = 30 - numDaysPrv;
                
                $.ajax({
                    url: 'CustomPackageController/getDayPlaceHotels',
                    type: 'POST',
                    data: {
                        numDaysPrv: numDaysPrv,
                        numDaysAdd: numDaysAdd
                    },
                    success: function (responseText) {
                        document.getElementById("numDays1").value = 30;
                        $('#days').append($(responseText).hide().fadeIn(500));
                    }

                });
            }
        }
    } else {
        if (numDays > numDaysPrvInt) {

            var numDaysAdd = numDays - numDaysPrv;
            $.ajax({
                url: 'CustomPackageController/getDayPlaceHotels',
                type: 'POST',
                data: {
                    numDaysPrv: numDaysPrv,
                    numDaysAdd: numDaysAdd
                },
                success: function (responseText) {
                    document.getElementById("numDays1").value = numDays;
                    $('#days').append($(responseText).hide().fadeIn(500));
                }

            });
        } else {
            for (var i = numDaysPrvInt; i > numDays; i--) {
                $('#d_' + i).fadeOut(500);
                document.getElementById("numDays1").value = numDays;
            }
        }
    }
}

function submitFunc() {
    if (validateForm()) {
        var email = document.getElementById("email").value;
        var country = document.getElementById("country").value;
        var mobile = document.getElementById("mobile").value;
        var hotel_star = document.getElementById("hotel_star").value;
        var numPersons = parseInt(document.getElementById("numPersons").value);
        var numDays = parseInt(document.getElementById("numDays").value);
        var singleRooms = parseInt(document.getElementById("single").value);
        var doubleRooms = parseInt(document.getElementById("double").value);
        var tribleRomms = parseInt(document.getElementById("trible").value);
        var message = document.getElementById("message").value;

        var placesInfo = [];
        if (document.getElementById('optionalFormStatus').checked) {
            for (var i = 1; i <= numDays; i++) {
                var temp = [];
                temp['place'] = document.getElementById("p_" + i).value;
                temp['hotel'] = document.getElementById("h_" + i).value;
                temp['room'] = document.getElementById("r_" + i).value;

                placesInfo[i - 1] = temp;
            }

            $.ajax({
                url: 'CustomPackageController/setCustomPackageData',
                type: 'POST',
                data: {
                    email: email,
                    country: country,
                    mobile: mobile,
                    numPersons: numPersons,
                    numDays: numDays,
                    singleRooms: singleRooms,
                    doubleRooms: doubleRooms,
                    tribleRomms: tribleRomms,
                    message: message,
                    hotelInfo: placesInfo
                },
                dataType: 'json',
                cache: false,
                success: function (result) {

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
            $('#content1').html(submitResult);
            $('#content2').hide()

        } else {
            $.ajax({
                url: 'CustomPackageController/setCustomPackageData',
                type: 'POST',
                data: {
                    email: email,
                    country: country,
                    mobile: mobile,
                    numPersons: numPersons,
                    numDays: numDays,
                    singleRooms: singleRooms,
                    doubleRooms: doubleRooms,
                    tribleRomms: tribleRomms,
                    message: message
                },
                dataType: 'json',
                cache: false,
                success: function (result) {
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
            $('#content1').html(submitResult);
            $('#content2').hide();
        }
    }
}

function validateForm() {
    return true;
}