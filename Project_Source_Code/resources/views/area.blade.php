<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
/* Google Fonts Import Link */
            #map {
                width: "100%";
                height: 400px;
            }

            #searchInput{
                font-size: 15px;
                font-family: arial;
                padding: 10, 20;
            }
            h1{
                font-family: "Sofia", sans-serif;
                font-style: normal;
                color: #190033;
            }
 
        </style>
    </head>
    @include('header');
    <div class=Mat>
    <h1> Our Chambers Map</h1>
    <body>
        <!-- Search input -->
<input id="searchInput" class="controls" type="text" placeholder="Enter a location">

<!-- Google map -->
<div id="map"></div>

<!-- Display geolocation data -->
<ul class="geo-data">
    <li>Full Address: <span id="location"></span></li>
    <li>Postal Code: <span id="postal_code"></span></li>
    <li>Country: <span id="country"></span></li>
    <li>Latitude: <span id="lat"></span></li>
    <li>Longitude: <span id="lon"></span></li>
</ul>

    </body></div>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAli9xei2ZjYobbHcr9NQXRwwX6GqhpeRQ&callback=initMap" async defer></script>
    <script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 23.8103, lng: 90.4125},
      zoom: 13
    });
    var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
  
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
        marker.setIcon(({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
    
        var address = '';
        if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
        }
    
        infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
        infowindow.open(map, marker);
      
        // Location details
        for (var i = 0; i < place.address_components.length; i++) {
            if(place.address_components[i].types[0] == 'postal_code'){
                document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
            }
            if(place.address_components[i].types[0] == 'country'){
                document.getElementById('country').innerHTML = place.address_components[i].long_name;
            }
        }
        document.getElementById('location').innerHTML = place.formatted_address;
        document.getElementById('lat').innerHTML = place.geometry.location.lat();
        document.getElementById('lon').innerHTML = place.geometry.location.lng();
    });
}
</script>
</html>