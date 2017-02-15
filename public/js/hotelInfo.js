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


