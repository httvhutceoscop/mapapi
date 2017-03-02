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
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">CMTS</a>
                    </li>
                    <li>
                        <a href="#">Cable Modem</a>
                    </li>
                    <li>
                        <a href="#">Merchant</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div id="control-wrapper" class="col-lg-12">
                <div class="col-lg-6">
                    <div id="floating-panel2">
                      <input onclick="clearMarkers();" type=button value="Hide Devices" class="btn btn-default">
                      <input onclick="showMarkers();" type=button value="Show All Devices" class="btn btn-default">
                      <!--input onclick="deleteMarkers();" type=button value="Delete Markers"-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Select Basic -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="selectdevice">Find devices</label>
                      <div class="col-md-8">
                        <select id="selectdevice" name="selectdevice" class="form-control" onchange="showDevice(this);">
                          <?php foreach ($devices as $key => $device) { ?>
                            <option value="<?= $key?>"><?= $device['mac'] . ' | ' . $device['cmts']?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                </div>                
            </div>
            <br/>                    
        </div>
        <div class="row">
            <div id="map-wrapper" class="col-lg-12">
                <div id="map"></div>    
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>    
    
    <script>
    var g_devices = <?= json_encode($devices, true)?>;

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

    var map;    
    var mapOptions = {
            zoom: ZOOM,
            center: centerCoor
        };
    var infowindow;
    var markers = [];
    var selectBoxDevices = document.getElementById('selectdevice');



    function initMap() {
        map = new google.maps.Map(mapDiv, mapOptions);

        google.maps.event.addListener(map, 'click', function(event) {
            console.log(event.latLng);
            console.log("click: lat:" + event.latLng.lat() + " lng: " + event.latLng.lng());
        });

        // Create the search box and link it to the UI element.
        //createSearchBox(map);
        //display device
        setMarkers(map);
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

            attachInfoWindow(marker, o, i);
        };
    }

    function attachInfoWindow(marker, device, i) {

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

        //console.log(marker);

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

        // infowindow = new google.maps.InfoWindow({
        //     content: content,
        //     //maxWidth: 200
        // });

        infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(content);
              infowindow.open(map, marker);
            }
          })(marker, i));

        google.maps.event.addListener(map, 'click', function() {
            infowindow.close();
            //marker.open = false;
        });

        // marker.addListener('click', function() {
        //     infowindow.open(marker.get('map'), marker);
        // });
    }

    function showDevice(element) {
        var i = element.value;
        markers[i].setMap(map);

        console.log(markers[i]);

        //closeInfoWindow(markers[i]);
        // The function to trigger the marker click, 'id' is the reference index to the 'markers' array.
        google.maps.event.trigger(markers[i], 'click');

        placeMarkerAndPanTo(map, markers[i]);
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

    function closeInfoWindow(marker) {
        google.maps.event.addListener(marker, 'click', function() {
            if(!marker.open){
                infowindow.open(map,marker);
                marker.open = true;
            }
            else{
                infowindow.close();
                marker.open = false;
            }
            google.maps.event.addListener(map, 'click', function() {
                infowindow.close();
                marker.open = false;
            });
        });
    }

    function placeMarkerAndPanTo(map, maker) {    

      // var marker = new google.maps.Marker({
      //   position: latLng,
      //   map: map
      // });
      map.panTo(maker.position);
    }

    </script>

    <!--script src="js/app.js"></script-->

    <!--script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKepRbP_CT1H8mKWQI7Xoyob5ERgQX9fs&callback=initMap&libraries=geometry&libraries=places"></script-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANBl73Tbg5yHh-iPxGg1ptaQ7SleKBGQQ&callback=initMap&libraries=geometry&libraries=places"></script>

</body>

</html>
