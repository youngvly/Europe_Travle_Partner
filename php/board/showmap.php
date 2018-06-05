<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete Hotel Search</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      table {
        font-size: 12px;
      }
      #map {
        width: 440px;
      }
      #listing {
        position: absolute;
        width: 200px;
        height: 470px;
        overflow: auto;
        left: 442px;
        top: 0px;
        cursor: pointer;
        overflow-x: hidden;
      }
      #findhotels {
        position: absolute;
        text-align: right;
        width: 100px;
        font-size: 14px;
        padding: 4px;
        z-index: 5;
        background-color: #fff;
      }
      #locationField {
        position: absolute;
        width: 190px;
        height: 25px;
        left: 108px;
        top: 0px;
        z-index: 5;
        background-color: #fff;
      }
      #controls {
        position: absolute;
        left: 300px;
        width: 140px;
        top: 0px;
        z-index: 5;
        background-color: #fff;
      }
      #autocomplete {
        width: 100%;
      }
      #country {
        width: 100%;
      }
      .placeIcon {
        width: 20px;
        height: 34px;
        margin: 4px;
      }
      .hotelIcon {
        width: 24px;
        height: 24px;
      }
      #resultsTable {
        border-collapse: collapse;
        width: 240px;
      }
      #rating {
        font-size: 13px;
        font-family: Arial Unicode MS;
      }
      .iw_table_row {
        height: 18px;
      }
      .iw_attribute_name {
        font-weight: bold;
        text-align: right;
      }
      .iw_table_icon {
        text-align: right;
      }
    </style>
    <?
      extract($_GET);
    ?>
  </head>

  <body>
        <div id="map"></div>

        <!--info box-->
        <div style="display: none">
        <div id="info-content">
          <table>
            <tr id="iw-url-row" class="iw_table_row">
              <!-- <td id="iw-icon" class="iw_table_icon"></td> -->
              </tr><tr>
              <td id="iw-url">위도 : <?=$lat?></td>
              </tr>
              <tr>
              <td> 경도 : <?=$lng?></td>
              </tr>
            
          </table>
        </div>
      </div>
    <!-- google map -->
    <script>
            // This example uses the autocomplete feature of the Google Places API.
            // It allows the user to find all hotels in a given place, within a given
            // country. It then displays markers for all the hotels returned,
            // with on-click details for each hotel.
      
            // This example requires the Places library. Include the libraries=places
            // parameter when you first load the API. For example:
            // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      
            var map, places, infoWindow;
            var autocomplete;
            var countryRestrict = {'country': 'cz'};
            var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
            var hostnameRegexp = new RegExp('^https?://.+?/');

            var countries = {
                'cz': {     //체코
                center: {lat: 50.07, lng: 14.43},
                zoom: 5
                }
            };
            

            var latlngob ={lat: parseFloat(<?=$lat?>) , lng:parseFloat(<?=$lng?>)};
            console.log(latlngob);

             function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                //zoom : 8,
                zoom: countries['cz'].zoom,
                center: countries['cz'].center,
                mapTypeControl: false,
                panControl: false,
                zoomControl: false,
                streetViewControl: false,
                
                });  // Create the autocomplete object and associate it with the UI input control.
                // Restrict the search to the default country, and to place type "cities".
                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */ (
                        document.getElementById('autocomplete')), {
                    types: ['(cities)'],
                    componentRestrictions: countryRestrict
                    });
                places = new google.maps.places.PlacesService(map);
                infoWindow = new google.maps.InfoWindow({
                  content: document.getElementById('info-content')});
                var marker;

                function placeMarkerAndPanTo(latLng, map) {
                if (!marker || !marker.setPosition) {
                marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                });
                } else {
                marker.setPosition(latLng);
                }
                map.panTo(latLng);
                google.maps.event.addListener(marker, 'click', function() {
                
                  infoWindow.open(map, marker);
                  });
                };
                

                placeMarkerAndPanTo(latlngob,map);

                
              }
      

/*        function buildIWContent(place) {
        document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
            'src="' + place.icon + '"/>';
        document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
            '">' + place.name + '</a></b>';
        document.getElementById('iw-address').textContent = place.vicinity;

        if (place.formatted_phone_number) {
          document.getElementById('iw-phone-row').style.display = '';
          document.getElementById('iw-phone').textContent =
              place.formatted_phone_number;
        } else {
          document.getElementById('iw-phone-row').style.display = 'none';
        }
       } */

    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUxqeM58aJDQn7dRClt3BjXjxgZYkMd8Q&libraries=places&callback=initMap"
     async defer></script>
    </body>
</html>