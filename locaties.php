<?php include 'header.php';?>

<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

<div class="row">
<div id="white" class="col-5">
    <h1> Locaties </h1><br>
    <p>Rotterdam<br>
    Hondenstraat 5<br>
    2408PN</p>
    <p>Amsterdam<br>
    Ietsnogwat 555<br>
    2500 HN</p>
    <p>Utrecht<br>
    Eenlocatievandepizzaboer 999<br>
    2855 RR</p>
</div>
<div class="col-7">
    <div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([4.464306, 51.921169]),
          zoom:15
        })
      });
    </script>
</div>
</div>

<?php include 'footer.php';?>
