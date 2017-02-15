function getHotelsPackage(packageId, star) {
     $.ajax({
        url: '../PackageController/getHotelInfo',
        type: 'POST',
        data: {
            packageId : packageId,
            star : star
        },
        dataType: 'json',
        cache: false,
        success: function (result) {
            for(i=0; i<result.length; i++){
                var hId = result[i].h_id;
                var rId = result[i].r_id;
                var sId = result[i].s_id;
                var hotels = result[i].hotels;
                var rooms = result[i].rooms;
                
                $('#'+ hId).html(hotels);
                $('#'+ rId).html(rooms);
                document.getElementById(sId).value = star;
            }
            //$('#placeResult').html(responseText);
        }
    });
}

function getHotelsPlace(placeId, star){
    
}


