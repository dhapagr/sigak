<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="breadcrumbs-top">
                    <h5 class="content-header-title float-left pr-1 mb-0">Admin</h5>
                    <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                        <!-- <?php foreach ($data_all as $key) : ?> -->
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/dashboard"); ?>"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Edit Data Kecelakaan  
                                <!-- <label for="basicInput" ><?php echo base_url($key['id_kecelakaan'])?></label> -->
                            </li>
                        <!-- <?php endforeach ;?> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($data_all as $data) : ?>
        <!-- <section id="horizontal-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <center>
                               <h1 class="card-title">Form Edit Data</h3> 
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="leaflet-map" id="map"></div>
                        </div>
                        <div class="card-body">
                            <center>
                               <h1 class="card-title">Form Edit Data</h3> 
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label for="basicInput">Longitude</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="text" name="longitude" class="form-control" id="longitude" value="<?= $data['longitude']?>" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-3">
                                            <label for="basicInput">Latitude</label>
                                        </div>
                                        <div class="col-lg-10 col-9">
                                            <input type="text" name="latitude" class="form-control" id="latitude" value="<?= $data['latitude']?>" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <?php endforeach ;?>
        <section id="info-tabs-">
            <div class="row">
                <div class="col-12">
                    <div class="card icon-tab">
                        <div class="card-body mt-2"> 
                            <?php foreach ($data_by_id as $data) : ?>
                            <form method="post" action="<?php echo base_url('admin/data_kecelakaan/update/'.$data['id_kecelakaan']) ?>" enctype="multipart/form-data" class="wizard-horizontal">
                                <h6>
                                    <i class="step-icon"></i>
                                    <span class="fonticon-wrap">
                                        <i class="livicon-evo" data-options="name:settings.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                                    </span>
                                    <span> Form Edit Data</span>
                                </h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="py-50"></h6>
                                        </div>
                                        <div class="col-12">
                                            <div class="leaflet-map" id="map"></div>
                                        </div>
                                        <div class="col-12">
                                            <h6 class="py-50"></h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="py-50">Detail Data</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Longitude</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" name="lng_edit" class="form-control" id="longitude" value="<?= $data['longitude']?>" required/>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Latitude</label>
                                                </div>
                                            <div class="col-lg-10 col-9">
                                                <input type="text" name="lat_edit" class="form-control" id="latitude" value="<?= $data['latitude']?>" required/>
                                            </div>
                                        </div>
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Kecamatan</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <div class="input-group">
                                                        <select class="custom-select" id='kecamatan' name="kecamatan_edit" required>
                                                            <?php foreach ($data_kecamatan as $k) :?>
                                                                <?php foreach ($data_by_id as $dt) :
                                                                    if($dt['id_kecamatan'] == $k['id_kecamatan']):?>
                                                                        <option value="<?php echo $dt['id_kecamatan'] ?>" selected><?php echo$dt['nama_kecamatan'] ?></option>
                                                                    <?php else:?>
                                                                        <option value="<?php echo $k['id_kecamatan'] ?>"><?php echo$k['nama_kecamatan'] ?></option>
                                                                <?php endif; endforeach ?>
                                                            <?php endforeach ?>

                                                            <!-- <?php foreach ($data_kecamatan as $k) :?>
                                                                <?php foreach ($data_by_id as $dt) :
                                                                    if($dt['id_kecamatan'] == $k['id_kecamatan']):?>
                                                                        <option value="<?php echo$k['id_kecamatan'] ?>" ><?php echo$k['nama_kecamatan'] ?></option>
                                                                    <?php else:?>
                                                                        <option value="<?php echo$k['id_kecamatan'] ?>"><?php echo$k['nama_kecamatan'] ?></option>
                                                                    <?php endif; endforeach ?>)
                                                            <?php endforeach ?> -->
                                                        </select>
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Kelurahan</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <div class="input-group">
                                                        <select id='kelurahan' name="kelurahan_edit" class="custom-select" required>
                                                            <?php foreach ($data_by_id as $dt) :?>
                                                                <option value="<?php echo $dt['id_kelurahan'] ?>" selected ><?php echo$dt['nama_kelurahan'] ?></option>
                                                            <?php endforeach ?>
                                                            <!-- <?php foreach ($data_wilayah as $w) :?>
                                                                <?php foreach ($data_by_id as $dt) :
                                                                    if($dt['id_kelurahan'] == $w['id_kelurahan']):?>
                                                                        <option value="<?php echo$w['id_kelurahan'] ?>" ><?php echo$w['nama_kelurahan'] ?></option>
                                                                    <?php else:?>
                                                                        <option value="<?php echo$w['id_kelurahan'] ?>"><?php echo$w['nama_kelurahan'] ?></option>
                                                                    <?php endif; endforeach ?>)
                                                            <?php endforeach ?> -->
                                                        </select>
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Nama Jalan</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" name="jalan_edit" class="form-control" id="jalan" placeholder="Masukkan Nama Jalan" value="<?= $data['nama_jalan']?>" required/>    
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Meniggal Dunia</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" name="md_edit" class="form-control" id="md"  placeholder="Meniggal Dunia.." value="<?= $data['meninggal_dunia']?>" required/>    
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label for="basicInput">Kerugian Materi</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="number" name="kermat_edit" class="form-control" id="kermat"  placeholder="ex: 50000" value="<?= $data['kerugian_materi']?>" required/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-4 col-3">
                                                            <label for="basicInput">Luka Berat</label>
                                                        </div>
                                                        <div class="col-lg-7 col-9">
                                                            <input type="number" name="lb_edit" class="form-control" id="kermat"  placeholder="ex: 50000" value="<?= $data['luka_berat']?>" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-5 col-3">
                                                            <label for="basicInput">Luka Ringan</label>
                                                        </div>
                                                        <div class="col-lg-7 col-9">
                                                            <input type="number" name="lk_edit" class="form-control" id="kermat"  placeholder="ex: 50000" value="<?= $data['luka_ringan']?>" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <button type="button" onclick="tutup()" class="btn btn-danger glow mr-1 mb-1"><i class="bx bx-x-circle"></i>
                                                    <span class="align-middle ml-25">Cancel Data</span> 
                                                </button>
                                                <button type="submit" class="btn btn-success glow mr-1 mb-1"><i class="bx bx-pencil"></i>
                                                    <span class="align-middle ml-25">Edit Data</span>
                                                </button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </fieldset>
                            </form> 
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
        <?php foreach ($data_lokasi as $key) : ?>

            var myIcon = new L.Icon({
                iconUrl: 'assets/admin/icon/marker-icon-black.png',
                // iconSize: [40, 45], // size of the icon
            });
            var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';

            // Initial map view
            var INITIAL_LNG = <?= $key['longitude'] ?>;
            var INITIAL_LAT = <?= $key['latitude'] ?>;

            // Change the initial view if there is a GeoIP lookup
            if (typeof Geo === 'object') {
                INITIAL_LNG = Geo.lon;
                INITIAL_LAT = Geo.lat;
            }
            // Add layers that we need to the map
            var streets = L.tileLayer.Unwired({key: key, scheme: "streets"});
            var earth = L.tileLayer.Unwired({key: key, scheme: "earth"});
            var hybrid = L.tileLayer.Unwired({key: key, scheme: "hybrid"});

            var map = L.map('map', {
                scrollWheelZoom: (window.self === window.top) ? true : false,
                dragging: (window.self !== window.top && L.Browser.touch) ? false : true,
                layers: [streets],
                tap: (window.self !== window.top && L.Browser.touch) ? false : true,
            }).setView({ lng: INITIAL_LNG, lat: INITIAL_LAT }, 12);
            var hash = new L.Hash(map);

            // L.control.zoom({
            //     position:'topright'
            // }).addTo(map);

            // Add the 'layers' control
            L.control.layers({
                "Streets": streets,
                "Earth": earth,
                "Hybrid": hybrid,
            }, null, {
                position: "topright"
            }).addTo(map);
            // Add the 'scale' control
            L.control.scale().addTo(map);

            // Add geocoder
            var geocoder = L.control.geocoder(key, {
                fullWidth: 650,
                expanded: true,
                markers: true,
                url: 'https://api.locationiq.com/v1',
            }).addTo(map);

            // Re-sort control order so that geocoder is on top
            var geocoderEl = geocoder._container;
            geocoderEl.parentNode.insertBefore(geocoderEl, geocoderEl.parentNode.childNodes[0]);

            // Focus to geocoder input
            geocoder.focus();

            // Adding a script block to post message to the parent container (think iframed demos)
            window.addEventListener('hashchange', function () {
                parent.postMessage(window.location.hash, '*')
            });

            var latInput = document.querySelector("[name=latitude]");
            var lngInput = document.querySelector("[name=longitude]");

            var myIcon = new L.Icon({
                iconUrl: '<?php echo base_url("assets"); ?>/admin/icon/marker-icon-red.png',
                shadowUrl: '<?php echo base_url("assets"); ?>/admin/icon/marker-shadow.png',
                // iconSize: [40, 45], // size of the icon
            });

            var curLocation = [<?= $key['latitude'] ?>,<?= $key['longitude'] ?>];

            // map.attributionControl.setPrefix(false);

            var marker = new L.marker(curLocation, 
            {
                icon: myIcon ,
                draggable: 'true',
            });

            marker.on('dragend', function(event)
            {
                var position = marker.getLatLng();
                marker.setLatLng(position, {
                    draggable: 'true',
                }).bindPopup(position).update();
                $("#longitude").val(position.lng);
                $("#latitude").val(position.lat);
            });

            map.addLayer(marker);

        <?php endforeach ;?>

</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('#kecamatan').change(function() {
				var kec = $('#kecamatan').val();			
                if (kec != '') {
					$.ajax({
						url: "<?php echo base_url('admin/data_kecelakaan/getKel') ?>",
						type: "POST",
						data: {
							kecamatan: kec
						},
						success: function(response) {
							console.log(response);
							$('#kelurahan').html(response);
						}
                        
					})
				}
			})
		})
</script>
<script>
    function tutup()
    {   
            swal({
                title: "Cancel Edit Data?",
                text: "Data Akan Direset Ulang !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location = "<?php echo base_url('admin/data_kecelakaan') ?>" ;
                } else {
                    // swal("Data Tidak Terhapus !");
                }
            });
    }
</script>
