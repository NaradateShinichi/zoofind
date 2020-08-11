function initMap(place) {
    // インスタンス[geocoder]作成
    var geocoder = new google.maps.Geocoder();
 
    geocoder.geocode({
        'address': place      // 起点のキーワード
    }, function(result, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            // 中心点を指定
            var latlng = result[0].geometry.location;
 
            // オプション
            var myOptions = {
                zoom: 14,               // (必須)デフォルトの地図の縮尺値
                center: latlng,         // (必須)デフォルトの地図の中心座標
                scrollwheel: true,     // ホイールでの拡大・縮小
                draggable: true
            };
 
            // #map_canvasを取得し、[mapOptions]の内容の、地図のインスタンス([map])を作成する
            var map = new google.maps.Map(document.getElementById('map'), myOptions);
        } else {
            alert('取得できませんでした…');
        }
    });
}
