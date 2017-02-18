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
    } 
    else {
        for(var i = numPlacesprv; i>numPlaces; i--){
            $('#d_' + i).fadeOut(500);
        }
        document.getElementById("numPlaces1").value = numPlaces;
    }
}