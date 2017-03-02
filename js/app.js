// initialize for map position
var initCoor = new Map([
    ['code', 'VN'],
    ['lat', 21.032416084265936],
    ['lng', 105.84286451339722]
  ]);
const ZOOM = 12;
var centerCoor = { lat: initCoor.get('lat'), lng: initCoor.get('lng') }

var mapDiv = document.getElementById('map');
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var labelIndex = 0;

var image = 'http://toilamit.com/demo/mapapi/modem-red.png';

var markers = [];
var map;
var selectBoxDevices = document.getElementById('selectdevice');


function initMap() {
    map = new google.maps.Map(mapDiv, {
        zoom: ZOOM,
        center: centerCoor
    });

    google.maps.event.addListener(map, 'click', function(event) {
        console.log("click: lat:" + event.latLng.lat() + " lng: " + event.latLng.lng());
    });

    // Create the search box and link it to the UI element.
    //createSearchBox(map);
    //display device
    setMarkers(map);
    //clearMarkers();

}

google.maps.event.addDomListener(window, 'load', initMap);

function createSearchBox(map) {

    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        markers.forEach(function(marker) {
            marker.setMap(null);
        });
        markers = [];

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
}


function setMarkers(map) {
    for (var i = 0; i < g_devices.length; i++) {
        var o = g_devices[i];
        var mac = o.mac;
        var lat = o.lat;
        var lng = o.lng;
        var desc = o.desc;
        var status = o.status;

        var marker = new google.maps.Marker({
            position: { lat: lat, lng: lng },
            //label: labels[labelIndex++ % labels.length],
            map: map,
            icon: image,
            title: mac
        });

        markers.push(marker);

        attachInfoWindow(marker, o);
    };
}

function attachInfoWindow(marker, device) {

    var mac = '',
        merchant = '',
        cmts = '',
        downSNR = '',
        upSNR = '',
        fec = '',
        unfec = '',
        status = 'true';
    mac = device.mac;
    mac = mac.toUpperCase();
    merchant = device.merchant;
    cmts = device.cmts;
    downSNR = device.downSNR;
    upSNR = device.upSNR;
    fec = device.fec;
    unfec = device.unfec;
    status = device.status;

    var statusClass = '';
    if (status == 'true') {
        //content += `<div>Status: <img width="16" src="http://toilamit.com/demo/mapapi/modem-active.png"></div>`;
        statusClass = 'active';
    } else {
        // content += `<div>Status: <img width="16" src="http://toilamit.com/demo/mapapi/modem-deactive.png"></div>`;
        statusClass = 'deactive';
    }

    console.log(marker);

    var content = `<div class="modem-description"> <table>
                        <tr> <td colspan="4">Cable modem</td> </tr>
                        <tr> <th colspan="4">${mac}</th> </tr>
                        <tr> <td colspan="4"></td> </tr>
                        <tr> <td>Merchant</td> <td>:</td> <td>${merchant}</td> <td></td> </tr>
                        <tr> <td>CMTS</td> <td>:</td> <td>${cmts}</td> <td></td> </tr>
                        <tr> <td>Down SNR</td> <td>:</td> <td>${downSNR} Mb</td> <td></td> </tr>
                        <tr> <td>Up SNR</td> <td>:</td> <td>${upSNR} Mb</td> <td></td> </tr>
                        <tr> <td>Fec</td> <td>:</td> <td>${fec}</td> <td>%</td> </tr>
                        <tr> <td>Unfec</td> <td>:</td> <td>${unfec}</td> <td>%</td> </tr>
                        <tr> <td>Status</td> <td>:</td> <td colspan="2"><span class="modem-status ${statusClass}"></span></td> </tr>
                      </table> </div>`;

    var infowindow = new google.maps.InfoWindow({
        content: content,
        //maxWidth: 200
    });

    marker.addListener('click', function() {
        infowindow.open(marker.get('map'), marker);
    });
}

function showDevice(element) {
    var i = element.value;
    markers[i].setMap(map);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
    setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    clearMarkers();
    markers = [];
}