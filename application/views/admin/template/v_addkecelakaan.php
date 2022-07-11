<script src="<?php echo base_url("assets"); ?>/admin/js/scripts/maps/geojson_madiun_kota.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/scripts/maps/geojson_kecamatan_indonesia.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/leaflet_search.js"></script> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>   

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets"); ?>/admin/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
<script src="<?php echo base_url("assets"); ?>/admin/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/scripts/forms/number-input.js"></script>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2 mt-1">
                <div class="breadcrumbs-top">
                    <h5 class="content-header-title float-left pr-1 mb-0">Admin</h5>
                    <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard"); ?>"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Data Kecelakaan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
           <section>
                <div class="row">
                    <div class="col-12">
                        <div class="card" >
                            <div class="card-header">
                                <h4 class="text-primary" >Peta Digital | Ambil Koordinat Lokasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="leaflet-map" id="map"></div>
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            <div class="card-header">
                                <h4 class="text-primary" >Data Kecalakaan | Form Tambah Data</h4>
                                <div class="col-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('admin/Data_kecelakaan/tambah_data') ?>" enctype="multipart/form-data" id="test"> 
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="card-title">
                                                Nama Jalan
                                            </h6>
                                        </div>
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <input type="text" name="jalan" class="form-control" id="jalan" placeholder="Masukkan Nama Jalan" required/>
                                            </fieldset>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="card-title">
                                                Koordinat
                                            </h4>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <input type="text" name="longitude" class="form-control" id="longitude" placeholder="Longitude" required/>
                                            </fieldset>
                                        </div>    
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <input type="text" name="latitude" class="form-control" id="latitude" placeholder="Latitude" required/>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="card-title">
                                                Wilayah
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Kecamatan</label>
                                                        <div class="input-group">
                                                            <select class="select2" id='kecamatan' name="kecamatan" required>
                                                                <option value="" disabled selected hidden>Pilih Kecamatan</option>
                                                                <?php foreach ($data_kecamatan as $k) :?>
                                                                    <option value="<?php echo $k['id_kecamatan'] ?>"><?php echo$k['nama_kecamatan'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>   
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Kelurahan</label>
                                                        <div class="input-group">
                                                            <select id='kelurahan' name="kelurahan" class="select2" required>
                                                                <option value="" disabled selected hidden>Pilih Kelurahan</option>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>   
                                            </div>
                                            <hr>
                                        </div>
                                        <!-- <div class="col-12">
                                            <h4 class="card-title">
                                                Jumlah Kecelakaan
                                            </h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-inline-block mb-1">
                                                <input type="number" class="touchspin-icon" value="0" min="0" name="jumlah_kec" required>
                                            </div>
                                        </div>    -->
                                        <!-- <div class="col-12">
                                            <hr>
                                        </div>  -->
                                        <!-- <div id="tabel-data-kecelakaan"></div> -->
                                        <div class="card-body">
                                            <div id="tabel-data-kecelakaan" class="mb-2"></div>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="card-title">
                                                Jenis Korban & Kerugian Materi
                                            </h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="d-inline-block mb-1">
                                                        <label for="basicInput">Meninggal Dunia</label>
                                                        <input type="number" class="touchspin-icon" value="0" min="0" name="meninggal" >
                                                    </div>
                                                </div>   
                                                <div class="col-md-3">
                                                    <div class="d-inline-block mb-1">
                                                        <label for="basicInput">Luka Berat</label>
                                                        <input type="number" class="touchspin-icon" value="0" min="0" name="luka_berat" >
                                                    </div>
                                                </div>   
                                                <div class="col-md-3">
                                                    <div class="d-inline-block mb-1">
                                                        <label for="basicInput">Luka Ringan</label>
                                                        <input type="number" class="touchspin-icon" value="0" min="0" name="luka_ringan" >
                                                    </div>
                                                </div>   
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Kerugian Materi</label>
                                                        <input type="number" name="kermat" class="form-control" id="kermat"  placeholder="ex: 50000" required/>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <h4 class="card-title">
                                                            Kejadian Menurut Waktu
                                                        </h4>
                                                        <div class="input-group">
                                                            <select class="select2" name="waktu" id="waktu" required>
                                                                <option value="" disabled selected hidden>Waktu Kejadian</option>
                                                                <?php foreach ($data_waktu as $wkt) :?>
                                                                    <option value="<?php echo $wkt['id_waktukej'] ?>"><?php echo$wkt['jenis_waktu'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>   
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <h4 class="card-title">
                                                            Jenis Kendaraan
                                                        </h4>
                                                        <div class="input-group">
                                                            <select class="select2" name="jenis_kendaraan" id="jenis_kendaraan" required>
                                                                <option value="" disabled selected hidden>Jenis Kendaraan</option>
                                                                <?php foreach ($data_kendaraan as $kendaraan) :?>
                                                                    <option value="<?php echo $kendaraan['id_jenis'] ?>"><?php echo$kendaraan['jenis_kendaraan'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div> 
                                                <div class="col-md-4">
                                                    <fieldset class="form-group">
                                                        <h4 class="card-title">
                                                            Korban Menurut Profesi
                                                        </h4>
                                                        <div class="input-group">
                                                            <select class="select2" name="profesi" id="profesi" required>
                                                                <option value="" disabled selected hidden>Profesi Korban</option>
                                                                <?php foreach ($data_profesi as $profesi) :?>
                                                                    <option value="<?php echo $profesi['id_profesi'] ?>"><?php echo$profesi['profesi'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>       
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <h4 class="card-title">
                                                            Menurut Umur
                                                        </h4>
                                                        <div class="input-group">
                                                            <select class="select2" name="umur" id="umur" required>
                                                                <option value="" selected disabled hidden>Umur Korban</option>
                                                                <?php foreach ($data_umur as $umur) :?>
                                                                    <option value="<?php echo $umur['id_umur'] ?>"><?php echo$umur['umur'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>  
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <h4 class="card-title">
                                                            Type Kejadian
                                                        </h4>
                                                        <div class="input-group">
                                                            <select class="select2" name="type" id="type" required>
                                                                <option value="" disabled selected hidden>Type Kejadian</option>
                                                                <?php foreach ($data_type as $type) :?>
                                                                    <option value="<?php echo $type['id_type'] ?>"><?php echo$type['type_kejadian'] ?></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>       
                                            </div> 
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div id="kcl"></div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                                <button id="tambah_kecelakaan" type="button" class="btn btn-primary glow mr-1 mb-1"><i class="bx bxs-add-to-queue"></i>
                                                    <span class="align-middle ml-25">Tambah Data</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <button type="reset" onclick="tutup()" class="btn btn-danger glow mr-1 mb-1"><i class="bx bxs-x-square"></i>
                                                    <span class="align-middle ml-25">Clear Data</span> 
                                                </button>
                                                <button type="submit" class="btn btn-success glow mr-1 mb-1"><i class="bx bxs-add-to-queue"></i>
                                                    <span class="align-middle ml-25">Simpan Data</span>
                                                </button>
                                            </fieldset>
                                        </div> -->
                                    </div>             
                                </form>
                            </div>               
                        </div>
                    </div>
                </div>
            </section> 
          
        </div>
    </div>
</div>
<script type="text/javascript">
    <?php foreach ($data_lokasi as $key) : ?>
      // Maps access token goes here
      var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';

      var mark;
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

    //   L.control.zoom({
    //       position:'topright'
    //   }).addTo(map);

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

      var latInput = document.querySelector("[name=latitude]");
      var lngInput = document.querySelector("[name=longitude]");

      function onMapClicktambah(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;
            if(!mark){
                mark = L.marker(e.latlng).addTo(map);
            } else{
                mark.setLatLng(e.latlng);
            }
            console.log(e.latlng);

            latInput.value = lat;
            lngInput.value = lng;
        }
        map.on('click', onMapClicktambah);

      // Adding a script block to post message to the parent container (think iframed demos)
      window.addEventListener('hashchange', function () {
        parent.postMessage(window.location.hash, '*')
      });
    <?php endforeach ;?>
</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
        var wrapper = document.getElementById("tabel-data-kecelakaan");
        $.ajax({
            url: "<?=base_url('admin/Data_kecelakaan/show_data_kecelakaan')?>",
            success: function (response) {
                $(wrapper).html(response);
            }
        });

        $('#tambah_kecelakaan').click(function() {
            var jalan = $("input[name=jalan]").val();
            var longitude = $("input[name=longitude]").val();
            var latitude = $("input[name=latitude]").val();
            var kecamatan = $("#kecamatan").val();
            var kelurahan = $("#kelurahan").val();
            var meninggal = $("input[name=meninggal]").val();
            var luka_berat = $("input[name=luka_berat]").val();
            var luka_ringan = $("input[name=luka_ringan]").val();
            var kermat = $("input[name=kermat]").val();
            var waktu = $("#waktu").val();
            var jenis_kendaraan = $("#jenis_kendaraan").val();
            var profesi = $("#profesi").val();
            var umur = $("#umur").val();
            var type = $("#type").val();
            
            $.ajax({
                type: "Post",
                url: "<?=base_url('admin/Data_kecelakaan/tambah_data_kecelakaan')?>",
                data: {
                    jalan : jalan,
                    longitude : longitude,
                    latitude : latitude,
                    kecamatan : kecamatan,
                    kelurahan : kelurahan,
                    meninggal : meninggal,
                    luka_berat : luka_berat,
                    luka_ringan : luka_ringan,
                    kermat : kermat,
                    waktu : waktu,
                    jenis_kendaraan : jenis_kendaraan,
                    profesi : profesi,
                    umur : umur,
                    type : type,
                },
                success: function (response) {
                    if(response != 0){
                        // alert('sukses data kecelakaan berhasil ditambahkan');
                        $(wrapper).html(response);

                        // form input dimatikan
                        $("input[name=jalan]").attr('readonly','true');
                        $("input[name=longitude]").attr('readonly','true');
                        $("input[name=latitude]").attr('readonly','true');
                        $("#kecamatan").attr('disabled','true');
                        $("#kelurahan").attr('disabled','true');

                        // form input di reset
                        $("input[name=meninggal]").val(0);
                        $("input[name=luka_berat]").val(0);
                        $("input[name=luka_ringan]").val(0);
                        $("input[name=kermat]").val("");
                        $("#waktu").val('').trigger('change') ;
                        $("#jenis_kendaraan").val('').trigger('change') ;
                        $("#profesi").val('').trigger('change') ;
                        $("#umur").val('').trigger('change') ;
                        $("#type").val('').trigger('change') ;

                    }else{
                        alert('semuan inputan wajib diisi!');
                    }
                }
            });
        })

		$('#kecamatan').change(function() {
			var kec = $('#kecamatan').val();			
            if (kec != '') {
				$.ajax({
					url: "<?php echo base_url('admin/Data_kecelakaan/getKel') ?>",
					type: "POST",
					data: {
						kecamatan: kec
					},
					success: function(response) {
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
                window.location = "<?php echo base_url('admin/Data_kecelakaan') ?>" ;
            } else {
            // swal("Data Tidak Terhapus !");
            }
        });
    }
    function hapus_dt_kolom(id)
    {
        $.ajax({
            url: "<?=base_url('admin/Data_kecelakaan/hapus_dt_kolom_add')?>"+id,
            success: function (response) {
                alert('sukses data kecelakaan berhasil dihapus');
            }
        });
    }
</script>

