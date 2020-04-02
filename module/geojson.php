<?php
  include "../config/db.php";
  ob_start();
?>

{
  "type":"FeatureCollection",
  "features":[

    <?php $i = 0; ?>

    <?php
      $sql = "SELECT *
        FROM provinsi
        WHERE polygon != ''
        AND nama != 'Jakarta'
        AND nama != 'Banten'
      ";
      $result = $con->query($sql);
      while ($row = $result->fetch_assoc()) { $i++; if ($i>1) echo ",";
    ?>
    {
      "type":"Feature",
      "properties":{
        "table":"provinsi",
        "provinsi":"<?= $row["nama"]; ?>",
        "positif":"<?= $row["positif"]; ?>",
        "sembuh":"<?= $row["sembuh"]; ?>",
        "meninggal":"<?= $row["meninggal"]; ?>",
        "last_update":"<?= $row["last_update"]; ?>",
        "source":"<?= $row["source"]; ?>"
      },
      "geometry":{
        "type":"Polygon",
        "coordinates":[
          [
            <?= $row["polygon"]; ?>
          ]
        ]
      }
    }
    <?php } ?>

    <?php
      $sql = "SELECT
        provinsi.nama AS provinsi,
        kabupaten.nama AS kabupaten,
        kabupaten.polygon,
        kabupaten.positif,
        kabupaten.sembuh,
        kabupaten.meninggal,
        kabupaten.last_update,
        kabupaten.source
        FROM kabupaten INNER JOIN provinsi
        ON kabupaten.provinsi = provinsi.id
        WHERE kabupaten.polygon != ''
        AND provinsi.nama = 'Banten'
      ";
      $result = $con->query($sql);
      while ($row = $result->fetch_assoc()) { $i++; if ($i>1) echo ",";
    ?>
    {
      "type":"Feature",
      "properties":{
        "table":"kabupaten",
        "provinsi":"<?= $row["provinsi"]; ?>",
        "kabupaten":"<?= $row["kabupaten"]; ?>",
        "positif":"<?= $row["positif"]; ?>",
        "sembuh":"<?= $row["sembuh"]; ?>",
        "meninggal":"<?= $row["meninggal"]; ?>",
        "last_update":"<?= $row["last_update"]; ?>",
        "source":"<?= $row["source"]; ?>"
      },
      "geometry":{
        "type":"Polygon",
        "coordinates":[
          [
            <?= $row["polygon"]; ?>
          ]
        ]
      }
    }
    <?php } ?>

    <?php
      $sql = "SELECT *
        FROM kelurahan
        WHERE polygon != ''
      ";
      $result = $con->query($sql);
      while ($row = $result->fetch_assoc()) { $i++; if ($i>1) echo ",";
    ?>
    {
      "type":"Feature",
      "properties":{
        "table":"kelurahan",
        "provinsi":"Jakarta",
        "kelurahan":"<?= $row["kelurahan"]; ?>",
        "menunggu_hasil":"<?= $row["menunggu_hasil"]; ?>",
        "positif":"<?= $row["positif"]; ?>",
        "last_update":"<?= $row["last_update"]; ?>",
        "source":"<?= $row["source"]; ?>"
      },
      "geometry":{
        "type":"Polygon",
        "coordinates":[
          [
            <?= $row["polygon"]; ?>
          ]
        ]
      }
    }
    <?php } ?>

  ]
}
