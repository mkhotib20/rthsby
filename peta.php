<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <title>Geographic Information Systems | Ruang Terbuka Hijau Surabaya</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="aset-qgis/css/leaflet.css">
        <link rel="stylesheet" href="aset-qgis/css/qgis2web.css">
        <link rel="stylesheet" href="aset-qgis/css/Control.OSMGeocoder.css">
        <link rel="stylesheet" href="aset-qgis/css/leaflet-measure.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/magnific.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Ramabhadra&display=swap" rel="stylesheet">
        <?php $page='peta'; include 'nav.php'; include 'data.php' ?>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        
<style>
    .main-content {
        position: relative;
    }
    .main-content .owl-theme .custom-nav {
        position: absolute;
        top: 35%;
        left: 0;
        right: 0;
    }
    .main-content .owl-theme .custom-nav .owl-prev, .main-content .owl-theme .custom-nav .owl-next {
        position: absolute;
        color: inherit;
        background: none;
        border: none;
        z-index: 100;
    }
    .main-content .owl-theme .custom-nav .owl-prev span, .main-content .owl-theme .custom-nav .owl-next span {
        font-size: 2.5rem;
        background-color: rgba(255,255,255,0.7);
        padding: 10px;
        color: #666;
        font-size: 29px;
    }
    .main-content .owl-theme .custom-nav .owl-prev {
        left: 0;
    }
    .main-content .owl-theme .custom-nav .owl-next {
        right: 0;
    }
    
</style>
        <title></title>
    </head>
    <body>
        <section class="peta" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-rl">
                                    <span class="satu" >Kota Surabaya </span><br> <span class="dua"> Bagian Timur</span>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div style="height: 500px;" id="map"></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pt-head">
                            <center><h2>Informasi Ruang Terbuka Hijau</h2></center>
                        </div>
                        <div class="main-content">
                            <div class="owl-carousel owl-theme">
                    <?php $dataLen = count($dataRTJ); for ($i=0; $i < $dataLen; $i++) { ?>
                                <div class="item">
                                    <div class="profil-taman">
                                        <div class="pt-head">
                                            <h2><?php echo $dataRTJ[$i]['nama'] ?></h2>
                                        </div>
                                        <div class="pt-body">
                                            <h4>Luas non-RTH :</h4>
                                            <p><?php echo $dataRTJ[$i]['lnrth'] ?></p>
                                            <h4>Luas RTH Existing :</h4>
                                            <p><?php echo $dataRTJ[$i]['lrthe'] ?></p>
                                            <h4>Luas RTH berdasarkan Kebutuhan O <sub>2</sub></h4>
                                            <p><?php echo $dataRTJ[$i]['lrtho'] ?></p>
                                            <h4>Luas RT yang belum terbangun</h4>
                                            <p><?php echo $dataRTJ[$i]['lrthb'] ?></p>
                                            <h4>Status</h4>
                                            <p><?php echo $dataRTJ[$i]['status'] ?></p>
                                        </div>
                                    </div>
                                </div>
                    <?php } ?>
                            </div>
                            <div class="owl-theme">
                                <div class="owl-controls">
                                    <div class="custom-nav owl-nav"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="js/less.min.js" ></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/magnific-popup.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script src="aset-qgis/js/qgis2web_expressions.js"></script>
        <script src="aset-qgis/js/leaflet.js"></script>
        <script src="aset-qgis/js/leaflet.rotatedMarker.js"></script>
        <script src="aset-qgis/js/leaflet.pattern.js"></script>
        <script src="aset-qgis/js/leaflet-hash.js"></script>
        <script src="aset-qgis/js/Autolinker.min.js"></script>
        <script src="aset-qgis/js/rbush.min.js"></script>
        <script src="aset-qgis/js/labelgun.min.js"></script>
        <script src="aset-qgis/js/labels.js"></script>
        <script src="aset-qgis/js/Control.OSMGeocoder.js"></script>
        <script src="aset-qgis/js/leaflet-measure.js"></script>
        <script src="aset-qgis/data/BatasAdministrasi_0.js"></script>
        <script src="aset-qgis/data/TenggilisMejoyo_1.js"></script>
        <script src="aset-qgis/data/Tambaksari_2.js"></script>
        <script src="aset-qgis/data/Rungkut_3.js"></script>
        <script src="aset-qgis/data/Mulyorejo_4.js"></script>
        <script src="aset-qgis/data/GunungAnyar_5.js"></script>
        <script src="aset-qgis/data/Gubeng_6.js"></script>
        <script src="aset-qgis/data/Sukolilo_7.js"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:2
        }).fitBounds([[-7.43240854895,112.643188368],[-7.21704388695,112.986708905]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var measureControl = new L.Control.Measure({
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        var bounds_group = new L.featureGroup([]);
        var basemap0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 28
        });
        basemap0.addTo(map);
        function setBounds() {
        }
        function pop_BatasAdministrasi_0(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID_1'] !== null ? Autolinker.link(String(feature.properties['OBJECTID_1'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Length'] !== null ? Autolinker.link(String(feature.properties['Shape_Length'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? Autolinker.link(String(feature.properties['Shape_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kota</th>\
                        <td>' + (feature.properties['Kota'] !== null ? Autolinker.link(String(feature.properties['Kota'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BatasAdministrasi_0_0(feature) {
            switch(String(feature.properties['Kecamatan'])) {
                case 'GUBENG':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,240,217,0.3)',
            }
                    break;
                case 'GUNUNG ANYAR':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,220,172,0.3)',
            }
                    break;
                case 'MULYOREJO':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,195,131,0.3)',
            }
                    break;
                case 'RUNGKUT':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,159,103,0.3)',
            }
                    break;
                case 'SUKOLILO':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(245,122,78,0.3)',
            }
                    break;
                case 'TAMBAKSARI':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(231,83,56,0.3)',
            }
                    break;
                case 'TENGGILIS MEJOYO':
                    return {
                pane: 'pane_BatasAdministrasi_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.3)',
                dashArray: '10,5,1,5,1,5',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(207,42,29,0.3)',
            }
                    break;
            }
        }
        map.createPane('pane_BatasAdministrasi_0');
        map.getPane('pane_BatasAdministrasi_0').style.zIndex = 400;
        map.getPane('pane_BatasAdministrasi_0').style['mix-blend-mode'] = 'normal';
        var layer_BatasAdministrasi_0 = new L.geoJson(json_BatasAdministrasi_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_BatasAdministrasi_0',
            onEachFeature: pop_BatasAdministrasi_0,
            style: style_BatasAdministrasi_0_0,
        });
        bounds_group.addLayer(layer_BatasAdministrasi_0);
        map.addLayer(layer_BatasAdministrasi_0);
        function pop_TenggilisMejoyo_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_TenggilisMejoyo_1_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Taman Kota':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,168,61,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Ruang Pejalan Kaki':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,241,73,1.0)',
            }
                    break;
                case 'RTH Sempadan SUTT':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,153,86,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Kelurahan':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,248,147,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Tetangga':
                    return {
                pane: 'pane_TenggilisMejoyo_1',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,162,25,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_TenggilisMejoyo_1');
        map.getPane('pane_TenggilisMejoyo_1').style.zIndex = 401;
        map.getPane('pane_TenggilisMejoyo_1').style['mix-blend-mode'] = 'normal';
        var layer_TenggilisMejoyo_1 = new L.geoJson(json_TenggilisMejoyo_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_TenggilisMejoyo_1',
            onEachFeature: pop_TenggilisMejoyo_1,
            style: style_TenggilisMejoyo_1_0,
        });
        bounds_group.addLayer(layer_TenggilisMejoyo_1);
        map.addLayer(layer_TenggilisMejoyo_1);
        function pop_Tambaksari_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Tambaksari_2_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Sabuk Hijau':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(32,127,54,1.0)',
            }
                    break;
                case 'Taman Kota':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,168,61,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'RTH Sempadan SUTT':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,153,86,1.0)',
            }
                    break;
                case 'RTH Sempadan Rel Kereta Api':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,239,159,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Warga':
                    return {
                pane: 'pane_Tambaksari_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,208,10,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_Tambaksari_2');
        map.getPane('pane_Tambaksari_2').style.zIndex = 402;
        map.getPane('pane_Tambaksari_2').style['mix-blend-mode'] = 'normal';
        var layer_Tambaksari_2 = new L.geoJson(json_Tambaksari_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_Tambaksari_2',
            onEachFeature: pop_Tambaksari_2,
            style: style_Tambaksari_2_0,
        });
        bounds_group.addLayer(layer_Tambaksari_2);
        map.addLayer(layer_Tambaksari_2);
        function pop_Rungkut_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Rungkut_3_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Hutan Kota':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,85,34,1.0)',
            }
                    break;
                case 'Taman Kota':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,168,61,1.0)',
            }
                    break;
                case 'Sabuk Hijau':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(32,127,54,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Ruang Pejalan Kaki':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,241,73,1.0)',
            }
                    break;
                case 'RTH Sempadan Pantai':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,230,46,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'RTH Sempadan SUTT':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,153,86,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Warga':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,208,10,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Tetangga':
                    return {
                pane: 'pane_Rungkut_3',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,162,25,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_Rungkut_3');
        map.getPane('pane_Rungkut_3').style.zIndex = 403;
        map.getPane('pane_Rungkut_3').style['mix-blend-mode'] = 'normal';
        var layer_Rungkut_3 = new L.geoJson(json_Rungkut_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_Rungkut_3',
            onEachFeature: pop_Rungkut_3,
            style: style_Rungkut_3_0,
        });
        bounds_group.addLayer(layer_Rungkut_3);
        map.addLayer(layer_Rungkut_3);
        function pop_Mulyorejo_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Mulyorejo_4_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Sabuk Hijau':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(32,127,54,1.0)',
            }
                    break;
                case 'Taman Kota':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,168,61,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Ruang Pejalan Kaki':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,241,73,1.0)',
            }
                    break;
                case 'RTH Sempadan Pantai':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,230,46,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'RTH Sempadan SUTT':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,153,86,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Kelurahan':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,248,147,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Warga':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,208,10,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Tetangga':
                    return {
                pane: 'pane_Mulyorejo_4',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,162,25,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_Mulyorejo_4');
        map.getPane('pane_Mulyorejo_4').style.zIndex = 404;
        map.getPane('pane_Mulyorejo_4').style['mix-blend-mode'] = 'normal';
        var layer_Mulyorejo_4 = new L.geoJson(json_Mulyorejo_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_Mulyorejo_4',
            onEachFeature: pop_Mulyorejo_4,
            style: style_Mulyorejo_4_0,
        });
        bounds_group.addLayer(layer_Mulyorejo_4);
        map.addLayer(layer_Mulyorejo_4);
        function pop_GunungAnyar_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_GunungAnyar_5_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Sabuk Hijau':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(32,127,54,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Ruang Pejalan Kaki':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,241,73,1.0)',
            }
                    break;
                case 'RTH Sempadan SUTT':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,153,86,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'RTH Sempadan Pantai':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,230,46,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Kelurahan':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,248,147,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Tetangga':
                    return {
                pane: 'pane_GunungAnyar_5',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,162,25,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_GunungAnyar_5');
        map.getPane('pane_GunungAnyar_5').style.zIndex = 405;
        map.getPane('pane_GunungAnyar_5').style['mix-blend-mode'] = 'normal';
        var layer_GunungAnyar_5 = new L.geoJson(json_GunungAnyar_5, {
            attribution: '<a href=""></a>',
            pane: 'pane_GunungAnyar_5',
            onEachFeature: pop_GunungAnyar_5,
            style: style_GunungAnyar_5_0,
        });
        bounds_group.addLayer(layer_GunungAnyar_5);
        map.addLayer(layer_GunungAnyar_5);
        function pop_Gubeng_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Gubeng_6_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Taman Kota':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,168,61,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Ruang Pejalan Kaki':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,241,73,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'RTH Sempadan Rel Kereta Api':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,239,159,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Tetangga':
                    return {
                pane: 'pane_Gubeng_6',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,162,25,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_Gubeng_6');
        map.getPane('pane_Gubeng_6').style.zIndex = 406;
        map.getPane('pane_Gubeng_6').style['mix-blend-mode'] = 'normal';
        var layer_Gubeng_6 = new L.geoJson(json_Gubeng_6, {
            attribution: '<a href=""></a>',
            pane: 'pane_Gubeng_6',
            onEachFeature: pop_Gubeng_6,
            style: style_Gubeng_6_0,
        });
        bounds_group.addLayer(layer_Gubeng_6);
        map.addLayer(layer_Gubeng_6);
        function pop_Sukolilo_7(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Leng</th>\
                        <td>' + (feature.properties['SHAPE_Leng'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SHAPE_Area</th>\
                        <td>' + (feature.properties['SHAPE_Area'] !== null ? Autolinker.link(String(feature.properties['SHAPE_Area'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas_PL</th>\
                        <td>' + (feature.properties['Kelas_PL'] !== null ? Autolinker.link(String(feature.properties['Kelas_PL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>Alamat</strong><br />' + (feature.properties['Alamat'] !== null ? Autolinker.link(String(feature.properties['Alamat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Sukolilo_7_0(feature) {
            switch(String(feature.properties['Kelas_PL'])) {
                case 'Hutan Kota':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(18,85,34,1.0)',
            }
                    break;
                case 'Sabuk Hijau':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(32,127,54,1.0)',
            }
                    break;
                case 'Taman Kota':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(28,168,61,1.0)',
            }
                    break;
                case 'RTH Jalur Hijau Jalan':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,207,75,1.0)',
            }
                    break;
                case 'RTH Ruang Pejalan Kaki':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(22,241,73,1.0)',
            }
                    break;
                case 'RTH Sempadan Sungai':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(151,198,64,1.0)',
            }
                    break;
                case 'RTH Sempadan Pantai':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(166,230,46,1.0)',
            }
                    break;
                case 'RTH Sempadan SUTT':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(146,153,86,1.0)',
            }
                    break;
                case 'Makam':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,200,70,1.0)',
            }
                    break;
                case 'Lapangan':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,236,48,1.0)',
            }
                    break;
                case 'RTH Kecamatan':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,231,16,1.0)',
            }
                    break;
                case 'RTH Taman Rukun Tetangga':
                    return {
                pane: 'pane_Sukolilo_7',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(241,162,25,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_Sukolilo_7');
        map.getPane('pane_Sukolilo_7').style.zIndex = 407;
        map.getPane('pane_Sukolilo_7').style['mix-blend-mode'] = 'normal';
        var layer_Sukolilo_7 = new L.geoJson(json_Sukolilo_7, {
            attribution: '<a href=""></a>',
            pane: 'pane_Sukolilo_7',
            onEachFeature: pop_Sukolilo_7,
            style: style_Sukolilo_7_0,
        });
        bounds_group.addLayer(layer_Sukolilo_7);
        map.addLayer(layer_Sukolilo_7);
        var osmGeocoder = new L.Control.OSMGeocoder({
            collapsed: false,
            position: 'topright',
            text: 'Search',
        });
        osmGeocoder.addTo(map);
        var baseMaps = {};
        L.control.layers(baseMaps,{'Sukolilo<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_HutanKota0.png" /></td><td>Hutan Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_SabukHijau1.png" /></td><td>Sabuk Hijau</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_TamanKota2.png" /></td><td>Taman Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHJalurHijauJalan3.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHRuangPejalanKaki4.png" /></td><td>RTH Ruang Pejalan Kaki</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHSempadanSungai5.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHSempadanPantai6.png" /></td><td>RTH Sempadan Pantai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHSempadanSUTT7.png" /></td><td>RTH Sempadan SUTT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_Makam8.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_Lapangan9.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHKecamatan10.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Sukolilo_7_RTHTamanRukunTetangga11.png" /></td><td>RTH Taman Rukun Tetangga</td></tr></table>': layer_Sukolilo_7,'Gubeng<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_TamanKota0.png" /></td><td>Taman Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_RTHJalurHijauJalan1.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_RTHRuangPejalanKaki2.png" /></td><td>RTH Ruang Pejalan Kaki</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_RTHSempadanSungai3.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_RTHSempadanRelKeretaApi4.png" /></td><td>RTH Sempadan Rel Kereta Api</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_Makam5.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_Lapangan6.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_RTHKecamatan7.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Gubeng_6_RTHTamanRukunTetangga8.png" /></td><td>RTH Taman Rukun Tetangga</td></tr></table>': layer_Gubeng_6,'GunungAnyar<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_SabukHijau0.png" /></td><td>Sabuk Hijau</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHJalurHijauJalan1.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHRuangPejalanKaki2.png" /></td><td>RTH Ruang Pejalan Kaki</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHSempadanSUTT3.png" /></td><td>RTH Sempadan SUTT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHSempadanSungai4.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHSempadanPantai5.png" /></td><td>RTH Sempadan Pantai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_Makam6.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_Lapangan7.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHKecamatan8.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHKelurahan9.png" /></td><td>RTH Kelurahan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/GunungAnyar_5_RTHTamanRukunTetangga10.png" /></td><td>RTH Taman Rukun Tetangga</td></tr></table>': layer_GunungAnyar_5,'Mulyorejo<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_SabukHijau0.png" /></td><td>Sabuk Hijau</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_TamanKota1.png" /></td><td>Taman Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHJalurHijauJalan2.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHRuangPejalanKaki3.png" /></td><td>RTH Ruang Pejalan Kaki</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHSempadanPantai4.png" /></td><td>RTH Sempadan Pantai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHSempadanSungai5.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHSempadanSUTT6.png" /></td><td>RTH Sempadan SUTT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_Makam7.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_Lapangan8.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHKecamatan9.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHKelurahan10.png" /></td><td>RTH Kelurahan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHTamanRukunWarga11.png" /></td><td>RTH Taman Rukun Warga</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Mulyorejo_4_RTHTamanRukunTetangga12.png" /></td><td>RTH Taman Rukun Tetangga</td></tr></table>': layer_Mulyorejo_4,'Rungkut<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_HutanKota0.png" /></td><td>Hutan Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_TamanKota1.png" /></td><td>Taman Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_SabukHijau2.png" /></td><td>Sabuk Hijau</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHJalurHijauJalan3.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHRuangPejalanKaki4.png" /></td><td>RTH Ruang Pejalan Kaki</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHSempadanPantai5.png" /></td><td>RTH Sempadan Pantai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHSempadanSungai6.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHSempadanSUTT7.png" /></td><td>RTH Sempadan SUTT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_Makam8.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_Lapangan9.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHKecamatan10.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHTamanRukunWarga11.png" /></td><td>RTH Taman Rukun Warga</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Rungkut_3_RTHTamanRukunTetangga12.png" /></td><td>RTH Taman Rukun Tetangga</td></tr></table>': layer_Rungkut_3,'Tambaksari<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_SabukHijau0.png" /></td><td>Sabuk Hijau</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_TamanKota1.png" /></td><td>Taman Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_RTHJalurHijauJalan2.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_RTHSempadanSungai3.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_RTHSempadanSUTT4.png" /></td><td>RTH Sempadan SUTT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_RTHSempadanRelKeretaApi5.png" /></td><td>RTH Sempadan Rel Kereta Api</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_Makam6.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_Lapangan7.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_RTHKecamatan8.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/Tambaksari_2_RTHTamanRukunWarga9.png" /></td><td>RTH Taman Rukun Warga</td></tr></table>': layer_Tambaksari_2,'TenggilisMejoyo<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_TamanKota0.png" /></td><td>Taman Kota</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHJalurHijauJalan1.png" /></td><td>RTH Jalur Hijau Jalan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHRuangPejalanKaki2.png" /></td><td>RTH Ruang Pejalan Kaki</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHSempadanSUTT3.png" /></td><td>RTH Sempadan SUTT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHSempadanSungai4.png" /></td><td>RTH Sempadan Sungai</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_Makam5.png" /></td><td>Makam</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_Lapangan6.png" /></td><td>Lapangan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHKecamatan7.png" /></td><td>RTH Kecamatan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHKelurahan8.png" /></td><td>RTH Kelurahan</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/TenggilisMejoyo_1_RTHTamanRukunTetangga9.png" /></td><td>RTH Taman Rukun Tetangga</td></tr></table>': layer_TenggilisMejoyo_1,'Batas Administrasi<br /><table><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_GUBENG0.png" /></td><td>GUBENG</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_GUNUNGANYAR1.png" /></td><td>GUNUNG ANYAR</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_MULYOREJO2.png" /></td><td>MULYOREJO</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_RUNGKUT3.png" /></td><td>RUNGKUT</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_SUKOLILO4.png" /></td><td>SUKOLILO</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_TAMBAKSARI5.png" /></td><td>TAMBAKSARI</td></tr><tr><td style="text-align: center;"><img src="aset-qgis/legend/BatasAdministrasi_0_TENGGILISMEJOYO6.png" /></td><td>TENGGILIS MEJOYO</td></tr></table>': layer_BatasAdministrasi_0,},{collapsed:false}).addTo(map);
        setBounds();
        </script>
        <script>
$('.main-content .owl-carousel').owlCarousel({
    stagePadding: 20,
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<span class="fa fa-angle-left control" aria-hidden="true"></span>',
        '<span class="fa fa-angle-right control" aria-hidden="true"></span>'
    ],
    navContainer: '.main-content .custom-nav',
    responsive:{
        0:{
            items: 1
        },
        480:{
            items: 1
        },
        1000:{
            items: 4
        }
    }
});
</script>
    </body>
</html>