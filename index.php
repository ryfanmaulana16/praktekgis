<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryfan Open Street Map</title>
</head>

<body>
    <div id="map" style="width:100%;height:480px;">
        <script>
            var map = L.map('map').setView([-6.2392, 106.9170], 14);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap | Ryfan Maulana</a>'
            }).addTo(map);
            var kampus = L.marker([-6.23252, 106.92240]).bindPopup('<p>Stikom Cipta Karya Informatika</p>').addTo(map);
            L.marker([-6.22962, 106.92415]).bindPopup('<p>Universitas Darma Persada</p>').addTo(map);
            L.marker([-6.24904, 106.90793]).bindPopup('<p>Sekolah Tinggi Ilmu Ekonomi Swadaya</p>').addTo(map);
            L.marker([-6.24394, 106.89776]).bindPopup('<p>Universitas Borobudur</p>').addTo(map);

            var circle = L.circle([-6.2213, 106.9070], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 800
            }).addTo(map);

            var polygon = L.polygon([
                [-6.2367,106.9242],
                [-6.2475,106.9399],
                [-6.2317,106.9408]
            ]).addTo(map);
        </script>
    </div>
</body>

</html>