var mapLocation = new google.maps.LatLng(-37.816248, 144.965981); //change coordinates here
var marker;
var map;
function initialize() {
    var mapOptions = {
        zoom: 14, // Change zoom here
        center: mapLocation,
        scrollwheel: false,
        styles: [
            {"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},
            {"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},
            {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
            {"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},
            {"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},
            {"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#f6954d"}]},
            {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#e3e2e2"}]},
            {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
            {"featureType":"water","elementType":"all","stylers":[{"color":"#a4c4c8"},{"visibility":"on"}]}]
    };
    
    map = new google.maps.Map(document.getElementById('map'),
    mapOptions);
    
     
    //change address details here
    var contentString = '<div class="map-info">' 
    + '<div class="map-title">' 
    + '<div class="brand" href="#"><img alt="" src="images/brand.png"><div class="brand-info"><div class="brand-name">bauhaus</div><div class="brand-text">architecture</div></div></div></div>' 
    + '<div class="map-address-row">'
    + '  <span class="text"><strong class="text-dark">Melbourne, VIC 3000, Australia,</strong><br>'
    + '  269 King Str, 05th Floor</span>'
    + '</div>'
    + '<div>'
    + '   <span class="text"><strong class="text-dark">Phone:</strong> +99 (0) 344 956 4050</span>'
    + '</div>'
    + '<div class="map-address-row">'
    + '   <span class="map-email">'
    + '      <span class="text"><strong class="text-dark">Email:</strong> info@bauhaus.co</span>'
    + '   </span>'
    + '</div>' 
    + '<p class="gmap-open"><a href="https://www.google.com/maps/place/San+Miguel+15088/@-12.062218,-77.0949581,17z/data=!3m1!4b1!4m6!3m5!1s0x9105c95cc1e3c365:0x538233dea3ff010c!8m2!3d-12.0622233!4d-77.0923832!16s%2Fg%2F11hdnh566r?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D" target="_blank">Open on Google Maps</a></p></div>';
    
    
    var infowindow = new google.maps.InfoWindow({
        content: contentString,
    });
    

    // Uncomment down to show Marker
    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        title: 'Bauhaus', //change title here
        animation: google.maps.Animation.DROP,
        position: mapLocation
    });



    // Uncomment down to show info window on marker
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map, marker);
    });




}

if ($('#map').length) {
    google.maps.event.addDomListener(window, 'load', initialize);
}

