<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <style type="text/css">
        #map { height: 100vh; width: 100vw; }

    </style>
</head>
<body>
<div id="map"></div>


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script>


    var mymap = L.map('map', { gestureHandling: true,  dragging: true, tap: true }).setView([16.1922065, -61.272382499999], 10);


    mymap.locate({setView: true, maxZoom: 16});
    function locateUser() {
        mymap.locate({setView : true,  maxZoom: 16})
    }
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    function onLocationError(e) {
        alert(e.message);
    }
    mymap.on('locationerror', onLocationError);

    function onLocationFound(e) {
        var radius = e.accuracy;

        L.marker(e.latlng).addTo(mymap)
            .bindPopup("Vous êtes à l'intérieur " + radius + " mètres de ce point").openPopup();

        L.circle(e.latlng, radius).addTo(mymap);
    }

    mymap.on('locationfound', onLocationFound);
</script>

</body>
</html>
