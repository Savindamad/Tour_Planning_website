function changeNumPlaces(numPlaces) {
    var numPlacesprv = parseInt(document.getElementById("numPlaces1").value);

    if (numPlaces > numPlacesprv) {

        $.ajax({
            url: 'TourGuideController/getPlaces',
            type: 'POST',
            data: {
                placeNum: numPlacesprv,
                placeNumNw: numPlaces
            },
            success: function (responseText) {
                document.getElementById("numPlaces1").value = numPlaces;
                $('#places').append($(responseText).hide().fadeIn(500));
            }
        });
    } else {
        for (var i = numPlacesprv; i > numPlaces; i--) {
            $('#d_' + i).fadeOut(500);
        }
        document.getElementById("numPlaces1").value = numPlaces;
    }
}

function submitFunc() {
    if (validateForm()) {
        var email = document.getElementById("email").value;
        var country = document.getElementById("country").value;
        var mobile = document.getElementById("mobile").value;
        var numPersons = parseInt(document.getElementById("numPersons").value);
        var numDays = parseInt(document.getElementById("numDays").value);
        var numPlaces = parseInt(document.getElementById("numPlaces").value);
        var message = document.getElementById("message").value;

        var placesInfo = [];
        if (document.getElementById('optionalFormStatus').checked) {
            for (var i = 1; i <= numDays; i++) {
                placesInfo[i - 1] = document.getElementById("p_" + i).value;
            }

            $.ajax({
                url: 'TourGuideController/setTourGuideData',
                type: 'POST',
                data: {
                    email: email,
                    country: country,
                    mobile: mobile,
                    numPersons: numPersons,
                    numDays: numDays,
                    numPlaces: numPlaces,
                    message: message,
                    placeInfo: placesInfo
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
                                                <h3>Response successfully submitted</h3>\n\
                                                <p>Your response had been submitted. Our agent will contact you through email with further details. We will come up with the best travel reservation plan for you, considering all youur preferences, at the best rate. Thank you for choosing Walk Lanka Travels as your tour partner. We are looking forward to provide you with comfortable transporation with tour guidance. Have a nice day!</p>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>\n\
                            </div>';
            $('#content').html(submitResult);

        } else {
            $.ajax({
                url: 'TourGuideController/setTourGuideData',
                type: 'POST',
                data: {
                    email: email,
                    country: country,
                    mobile: mobile,
                    numPersons: numPersons,
                    numDays: numDays,
                    numPlaces: numPlaces,
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
                                                <h3>Response successfully submitted</h3>\n\
                                                <p>Your response had been submitted. Our agent will contact you through email with further details. We will come up with the best travel reservation plan for you, considering all youur preferences, at the best rate. Thank you for choosing Walk Lanka Travels as your tour partner. We are looking forward to provide you with comfortable transporation with tour guidance. Have a nice day!</p>\n\
                                                </div>\n\
                                            </div>\n\
                                        </div>\n\
                                    </div>\n\
                                </div>\n\
                            </div>';
            $('#content').html(submitResult);
        }
    }
}

function validateForm() {
    return true;
}