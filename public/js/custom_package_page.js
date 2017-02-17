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
    places['star'] = star;
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
                /*
                var i = numDaysPrvInt + 1;
                for (i; i <= numDays; i++) {
                    var htmlDiv = '<div class="col-md-6" style="margin-top: 20px; margin-bottom: 20px" id="d_' + i + '">\n\
                                    <div class="row" >\n\
                                        <div class="col-md-2">\n\
                                            </div><div class="col-md-10" style="background-color: #ffffff; border-radius: 5px;">\n\
                                                <div class="row"><div style="margin-top: 15px">';

                    if (i > 9) {
                        htmlDiv += '<h4>&nbsp&nbsp<b>Day ' + i + '</b></h4>';
                    } else {
                        htmlDiv += '<h4>&nbsp&nbsp<b>Day 0' + i + '</b></h4>';
                    }
                    htmlDiv += '</div>\n\
                                    </div>\n\
                                        <div class="row"><div class="col-md-6">\n\
                                            <form role="form">\n\
                                                <div class="form-group">\n\
                                                    <label for="p_' + i + '">Select Place</label>\n\
                                                        <select class="form-control" id="p_' + i + '" onchange="getPlaceHotels(' + i + ')">';

                    htmlDiv += '</select>\n\
                                    </div>\n\
                                        <div class="form-group"><label for="s_' + i + '">Hotel star</label>\n\
                                            <select class="form-control" id="s_' + i + '" onchange="getPlaceHotelsStar(' + i + ')">\n\
                                                <option value="TWO">Two star</option>\n\
                                                <option value="THREE">Three star</option>\n\
                                                <option value="FOUR">Four star</option>\n\
                                                <option value="FIVE">Five star</option>\n\
                                            </select>\n\
                                        </div>\n\
                                    </form>\n\
                                </div>\n\
                                <div class="col-md-6">\n\
                                    <form role="form">\n\
                                    <div class="form-group">\n\
                                        <label for="h_' + i + '">Select hotel</label>\n\
                                        <select class="form-control" id="h_' + i + '">\n\
                                        </select>\n\
                                    </div>\n\
                                    <div class="form-group">\n\
                                        <label for="r_' + i + '">Room condition</label>\n\
                                        <select class="form-control" id="r_' + i + '">\n\
                                            <option value="STANDARD">Standard</option>\n\
                                            <option value="DELUX">Delux</option>\n\
                                        </select>\n\
                                    </div>\n\
                                    </form>\n\
                                </div>\n\
                            </div>\n\
                        </div>\n\
                    </div>\n\
                </div>';
                    $('#days').append($(htmlDiv).hide().fadeIn(500));
                }
                 */
            }
           
        });
    } else {
        for (var i = numDaysPrv; i > numDays; i--) {
            $('#d_' + i).fadeOut(500);
        }
    }
}