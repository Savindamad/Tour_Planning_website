function searchPlace(placeName) {
    $.ajax({
        url: 'PlacesController/searchPlace',
        type: 'POST',
        data: {
            searchName: placeName
        },
        success: function (responseText) {
            $('#placeResult').html(responseText);
        }
    });
}