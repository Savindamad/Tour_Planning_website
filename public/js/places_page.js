function searchPlace(placeName) {
    if (placeName == "") {
        $.ajax({
            url: 'PlacesController/loadPlaces',
            type: 'POST',
            data: {
                searchName: placeName
            },
            success: function (responseText) {
                $('#placeResult').html(responseText).hide().fadeIn(1000);
            }
        });
    } else {
        $.ajax({
            url: 'PlacesController/searchPlace',
            type: 'POST',
            data: {
                searchName: placeName
            },
            success: function (responseText) {
                $('#placeResult').html(responseText).hide().fadeIn(1000);
            }
        });
    }
}