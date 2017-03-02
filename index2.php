<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
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
    </style>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <style type="text/css">
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
      #floating-panel {
        position: absolute;
        top: 0%;
        left: 0%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      .modem-description table td {
        padding: 2px;
      }
      .modem-status {
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
      }
      span.modem-status.active {
        background: green;
      }
      span.modem-status.deactive {
        background: red;
      }
    </style>

  </head>
  <body>

    <?php

      /*
      $arr = ['fc:52:8d:b7:5a:c5 20.98559302989702 105.81379473209381 CN2 uBR-10K-DT-NODE_39/250KIMGIANG 35.3 33.8 0 0 true',
              'cc:03:fa:47:73:80 20.99746293757926 105.86536824703217 CN3 uBR-10K-TN-01-NODE_559/86KIMNGUU 36 36.1 0 0 true',
              'cc:03:fa:a4:fa:fc 21.062254977133463 105.80913305282593 CN4 uBR-10K-TC-NODE_291LACLONGQUAN 12.9 29.9 0 0 false',
              'e4:48:c7:b7:86:72 21.03878488676688 105.82903504371643 CN4 uBR-NTC-NODE_67HOANGHOATHAM 33.7 33 0 0 false',
              'fc:52:8d:b7:28:93 21.071986369245504 105.77381372451782 CN4 uBR-7246-TRANCUNG-NODE_HOCVIENCANHSAT 36.2 36.1 0 0 true',
              'e4:48:c7:b8:ac:76 21.036972409368573 105.82839131355286 CN4 uBR-10K-NCT01-NODE_67HOANGHOATHAM 35.6 32.8 0 0 true'];

      $devices = [];
      foreach($arr as $item) {
        $info = explode(' ', $item);
        print_r($info);

        array_push($devices, [
          "mac" => $info[0],
          "lat" => $info[1],
          "lng" => $info[2],
          "merchant" => $info[3],
          "cmts" => $info[4],
          "downSNR" => $info[5],
          "upSNR" => $info[6],
          "fec" => $info[7],
          "unfec" => $info[8],
          "desc" => "",
          "status" => $info[9],
        ]);
      }

      echo '<pre>';
      echo json_encode($devices);
      echo '<pre>';

      die();
      */

      $devices = [[
            "mac"=> "fc:52:8d:b7:5a:c5",
            "lat"=> 20.98559302989702,
            "lng"=> 105.81379473209381,
            "merchant"=> "CN2",
            "cmts"=> "uBR-10K-DT-NODE_39\/250KIMGIANG",
            "downSNR"=> "35.3",
            "upSNR"=> "33.8",
            "fec"=> "0",
            "unfec"=> "0",
            "desc"=> "",
            "status"=> "true"
          ], [
            "mac"=> "cc:03:fa:47:73:80",
            "lat"=> 20.99746293757926,
            "lng"=> 105.86536824703217,
            "merchant"=> "CN3",
            "cmts"=> "uBR-10K-TN-01-NODE_559\/86KIMNGUU",
            "downSNR"=> "36",
            "upSNR"=> "36.1",
            "fec"=> "0",
            "unfec"=> "0",
            "desc"=> "",
            "status"=> "true"
          ], [
            "mac"=> "cc:03:fa:a4:fa:fc",
            "lat"=> 21.062254977133463,
            "lng"=> 105.80913305282593,
            "merchant"=> "CN4",
            "cmts"=> "uBR-10K-TC-NODE_291LACLONGQUAN",
            "downSNR"=> "12.9",
            "upSNR"=> "29.9",
            "fec"=> "0",
            "unfec"=> "0",
            "desc"=> "",
            "status"=> "false"
          ], [
            "mac"=> "e4:48:c7:b7:86:72",
            "lat"=> 21.03878488676688,
            "lng"=> 105.82903504371643,
            "merchant"=> "CN4",
            "cmts"=> "uBR-NTC-NODE_67HOANGHOATHAM",
            "downSNR"=> "33.7",
            "upSNR"=> "33",
            "fec"=> "0",
            "unfec"=> "0",
            "desc"=> "",
            "status"=> "false"
          ], [
            "mac"=> "fc:52:8d:b7:28:93",
            "lat"=> 21.071986369245504,
            "lng"=> 105.77381372451782,
            "merchant"=> "CN4",
            "cmts"=> "uBR-7246-TRANCUNG-NODE_HOCVIENCANHSAT",
            "downSNR"=> "36.2",
            "upSNR"=> "36.1",
            "fec"=> "0",
            "unfec"=> "0",
            "desc"=> "",
            "status"=> "true"
          ], [
            "mac"=> "e4:48:c7:b8:ac:76",
            "lat"=> 21.036972409368573,
            "lng"=> 105.82839131355286,
            "merchant"=> "CN4",
            "cmts"=> "uBR-10K-NCT01-NODE_67HOANGHOATHAM",
            "downSNR"=> "35.6",
            "upSNR"=> "32.8",
            "fec"=> "0",
            "unfec"=> "0",
            "desc"=> "",
            "status"=> "true"
          ]];

      $arr = [
        'code' => 'VN',
        'lat' => 21.032416084265936, 
        'lng' => 105.84286451339722,
      ];

      if (isset($_POST['submit'])) {
          $arr['code'] = $_POST['countrycode'];
          $arr['lat'] = $_POST['latitude'];
          $arr['lng'] = $_POST['longitude'];
      }
    ?>

    <form class="form-horizontal" method="post">
    <fieldset>

    <!-- Form Name -->
    <legend>Search Devices</legend>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectdevice">Find devices</label>
      <div class="col-md-4">
        <select id="selectdevice" name="selectdevice" class="form-control" onchange="showDevice(this);">
          <?php foreach ($devices as $key => $device) { ?>
            <option value="<?= $key?>"><?= $device['mac']?></option>
          <?php } ?>
        </select>
      </div>
    </div>

    </fieldset>
    </form>

    <!--input id="pac-input" class="controls" type="text" placeholder="Search Box"-->
    <div id="floating-panel">
      <input onclick="clearMarkers();" type=button value="Hide Devices">
      <input onclick="showMarkers();" type=button value="Show All Devices">
      <!--input onclick="deleteMarkers();" type=button value="Delete Markers"-->
    </div>
    <div id="map"></div>
    <script>

      var mapDiv = document.getElementById('map');
      // var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labels = '123456789';
      var labelIndex = 0;
      var centerCoor = {lat: <?= $arr['lat']?>, lng: <?= $arr['lng']?>}
      var image = 'http://toilamit.com/demo/mapapi/modem-red.png';//'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
      var ZOOM = 14;

      var beaches = [
        ['Bondi Beach', -33.890542, 151.274856, 4],
        ['Coogee Beach', -33.923036, 151.259052, 5],
        ['Cronulla Beach', -34.028249, 151.157507, 3],
        ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
        ['Maroubra Beach', -33.950198, 151.259302, 1]
      ];

      var markers = [];
      var map;

      var selectBoxDevices = document.getElementById('selectdevice');
      console.log(selectBoxDevices.value);


      function initialize() {
        map = new google.maps.Map(mapDiv, {
          zoom: ZOOM,
          center: centerCoor
        });

        google.maps.event.addListener(map, 'click', function(event) {
          //addMarker(event.latLng, map);
          console.log("click: lat:"+event.latLng.lat() + " lng: "+event.latLng.lng());
        });        

        // Create the search box and link it to the UI element.
        //createSearchBox(map);
        //display device
        initMarker(map);
        clearMarkers();

      }

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


      function initMarker(map, devices) {
        var devices = <?= json_encode($devices, true)?>;
        
        for (var i = 0; i < devices.length; i++) {
          var o = devices[i];
          var mac = o.mac;
          var lat = o.lat;
          var lng = o.lng;
          var desc = o.desc;
          var status = o.status;

          var marker = new google.maps.Marker({
            position: {lat: lat, lng: lng},
            //label: labels[labelIndex++ % labels.length],
            // label: mac,
            map: map,
            icon: image,
            title: mac
          });

          markers.push(marker);

          attachInfoWindow(marker, o);
        };
      }

      function attachInfoWindow(marker, device) {

        var mac = '', merchant = '', cmts = '', downSNR = '', upSNR = '', fec = '', unfec = '', status = 'true';
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

      // Adds a marker to the map.
      function addMarker(location, map) {
        
        var contentString = '<h1 id="firstHeading" class="firstHeading">Uluru</h1>';

        var infowindow = new google.maps.InfoWindow({
          content: labels[labelIndex++ % labels.length],
          maxWidth: 200
        });
        
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map,
          icon: image,
          title: 'Uluru (Ayers Rock)'
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }

      function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
        // Shapes define the clickable region of the icon. The type defines an HTML
        // <area> element 'poly' which traces out a polygon as a series of X,Y points.
        // The final coordinate closes the poly by connecting to the first coordinate.
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
          var marker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3]
          });
        }
      }

      //google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKepRbP_CT1H8mKWQI7Xoyob5ERgQX9fs&callback=initialize&libraries=geometry&libraries=places">
    </script>    

  </body>
</html>