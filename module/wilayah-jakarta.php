<script>

setTimeout(function initMap() {

  <?php

    include "module/style-peta.php";

    $center_lat = -6.175392;
    $center_long = 106.827153;
    $zoom = 13;

    switch ($_GET["region"]) {
      case 'Jakarta':
        $center_lat = -6.175392;
        $center_long = 106.827153;
        $zoom = 13;
        break;

      default:
        break;
    }
  ?>

  var peta;
  // Menampilkan peta
  peta = new google.maps.Map(document.getElementById('peta'), {
    zoom: <?= $zoom; ?>,
    center: {lat: <?= $center_lat; ?>, lng: <?= $center_long; ?>},
    styles: <?= $styles; ?>,
    mapTypeId: 'terrain'
  }); // End var map
  var infowindow = new google.maps.InfoWindow();

  peta.data.loadGeoJson('module/geojson.php');
  peta.data.setStyle(function(feature) {
    if (feature.getProperty('table')=="provinsi") {
      var provinsi = feature.getProperty('provinsi');
      var positif = feature.getProperty('positif');
      var sembuh = feature.getProperty('sembuh');
      var meninggal = feature.getProperty('meninggal');
      var last_update = feature.getProperty('last_update');
      var color = "white";
      if (positif == 0 && last_update != "0000-00-00 00:00:00") color = "green";
      if (positif > 0) color = "red";
    }
    if (feature.getProperty('table') == "kelurahan") {
      var provinsi = feature.getProperty('provinsi');
      var kelurahan = feature.getProperty('kelurahan');
      var menunggu_hasil = feature.getProperty('menunggu_hasil');
      var positif = feature.getProperty('positif');
      var last_update = feature.getProperty('last_update');
      var color = "white";
      if (provinsi == "Jakarta") {
        if (positif == 0 && menunggu_hasil == 0 && last_update != "0000-00-00 00:00:00") color = "green";
        if (menunggu_hasil > 0) color = "yellow";
        if (positif > 0) color = "red";
      }
      // End if Jakarta
    }

    return {
      fillColor: color,
      strokeWeight: 1
    }
  });
  peta.data.addListener('click', function(event) {
    var info = "";
    if (event.feature.getProperty('table')=="provinsi") {
      info = "" +

        "<p class='text-dark'>" +
        "Provinsi: " + event.feature.getProperty('provinsi') +
        "</p>" +

        "<p class='text-danger'>" +
        "Positif: " + event.feature.getProperty('positif') +
        "</p>" +

        "<p class='text-success'>" +
        "Sembuh: " + event.feature.getProperty('sembuh') +
        "</p>" +

        "<p class='text-dark'><b>" +
        "Meninggal: " + event.feature.getProperty('meninggal') +
        "</b></p>" +

        "<p class='text-dark'>" +
        "Last Update: " + event.feature.getProperty('last_update') +
        "</p>" +

        "<a target='_blank' href='" + event.feature.getProperty('source') + "'>Source</a>" +

      "";
    }
    if (event.feature.getProperty('table')=="kelurahan") {
      info = "" +

        "<p class='text-dark'>" +
        "Provinsi: " + event.feature.getProperty('provinsi') +
        "</p>" +

        "<p class='text-dark'>" +
        "Kelurahan: " + event.feature.getProperty('kelurahan') +
        "</p>" +

        "<p class='text-warning'>" +
        "Menunggu Hasil: " + event.feature.getProperty('menunggu_hasil') +
        "</p>" +

        "<p class='text-danger'>" +
        "Positif: " + event.feature.getProperty('positif') +
        "</p>" +

        "<p class='text-dark'>" +
        "Last Update: " + event.feature.getProperty('last_update') +
        "</p>" +

        "<a target='_blank' href='" + event.feature.getProperty('source') + "'>Source</a>" +

      "";
    }
    infowindow.setContent(info);
    infowindow.setPosition(event.latLng);
    infowindow.setOptions({
      pixelOffset: new google.maps.Size(0, -34)
    });
    infowindow.open(peta);
  });

} // End initMap()
, 1500);

</script>
