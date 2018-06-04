loadScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyC2563KrAlk1Yf75JS1yaqzVteUpyRiFBU&callback=initMap", function(){
    //initialization code
    console.log("load success");
});
var map;
function initMap() {
    var myLatLng = {lat: -25.363, lng: 131.044};

    map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 4
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });

    var service = new google.maps.places.PlacesService(map);
    service.getDetails(request, callback);
}
/*  var request = {
placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
}; */
        
// Search for Google's office in Australia.
var request = {
    location: map.getCenter(),
    radius: '500',
    query: 'Google Sydney'
};

// Checks that the PlacesServiceStatus is OK, and adds a marker
// using the place ID and location from the PlacesService.
function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        var marker = new google.maps.Marker({
        map: map,
        place: {
            placeId: results[0].place_id,
            location: results[0].geometry.location
        }
        });
    }
}