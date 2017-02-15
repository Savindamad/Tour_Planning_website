function getHotels(id,star) {
    $.ajax({
        url: '../PlaceController/getHotels',
        type: 'POST',
        data: {
            placeId : id,
            star : star
        },
        success: function (responseText) {
            $('#hotelsInfo').html(responseText);
        }
    });
}