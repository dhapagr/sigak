<!-- <script src="<?php echo base_url("assets"); ?>/admin/js/scripts/maps/geojson_madiun_kota.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/scripts/maps/geojson_kecamatan_indonesia.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/leaflet_search.js"></script>  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>   

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
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Dashboard"); ?>"><i class="bx bx-home-alt"></i></a>
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
        <?= $this->session->flashdata('test');?>
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
                                <!-- <form method="post" action="<?php echo base_url('admin/Data_kecelakaan/update/'.$data['id_kecelakaan']) ?>" enctype="multipart/form-data" class="wizard-horizontal"> -->
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
                                    </fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="card-title">
                                                Nama Jalan
                                            </h6>
                                        </div>
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <input type="text" name="jalan_edit" class="form-control" id="jalan" placeholder="Masukkan Nama Jalan" value="<?= $data['nama_jalan']?>" required/>
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
                                                <input type="text" name="lng_edit" class="form-control" id="longitude" placeholder="Longitude" value="<?= $data['longitude']?>" required/>
                                            </fieldset>
                                        </div>    
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <input type="text" name="lat_edit" class="form-control" id="latitude" placeholder="Latitude" value="<?= $data['latitude']?>" required/>
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
                                                            <select class="select2" id='kecamatan' name="kecamatan_edit" required>
                                                                <?php foreach ($data_kecamatan as $k) :?>
                                                                    <?php foreach ($data_by_id as $dt) :
                                                                        if($dt['id_kecamatan'] == $k['id_kecamatan']):?>
                                                                            <option value="<?php echo $dt['id_kecamatan'] ?>" selected><?php echo$dt['nama_kecamatan'] ?></option>
                                                                        <?php else:?>
                                                                            <option value="<?php echo $k['id_kecamatan'] ?>"><?php echo$k['nama_kecamatan'] ?></option>
                                                                    <?php endif; endforeach ?>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>   
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Kelurahan</label>
                                                        <div class="input-group">
                                                            <select id='kelurahan' name="kelurahan_edit" class="select2" required>
                                                                <?php foreach ($data_kelurahan as $k) :?>
                                                                    <?php foreach ($data_by_id as $dt) :
                                                                        if($dt['id_kelurahan'] == $k['id_kelurahan']):?>
                                                                            <option value="<?php echo $dt['id_kelurahan'] ?>" selected><?php echo$dt['nama_kelurahan'] ?></option>
                                                                        <?php else:?>
                                                                            <option value="<?php echo $k['id_kelurahan'] ?>"><?php echo$k['nama_kelurahan'] ?></option>
                                                                    <?php endif; endforeach ?>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>   
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="card-title">
                                                Jumlah Kecelakaan
                                            </h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-inline-block mb-1">
                                                <input type="number" class="touchspin-icon" min="0" name="jumlah_kec" value="<?= $data['jumlah_kecelakaan']?>" required>
                                            </div>
                                        </div>   
                                        <div class="col-12">
                                            <hr>
                                        </div> 
                                        <div class="card-body">
                                            <div id="tabel-data-kecelakaan" class="mb-2"></div>
                                        </div>
                                        <div class="col-12">
                                            <h4 class="card-title">
                                                Jenis Korban & Kerugian Materi
                                            </h4>
                                        </div>
                                        <div class="col-12" id="edit_data_kecelakaan">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="d-inline-block mb-1">
                                                        <!-- id kecelakaan -->
                                                        <input type="hidden" name="id_kecelakaan" id="id_kecelakaan">
                                                        <label for="basicInput">Meninggal Dunia</label>
                                                        <input type="number" class="touchspin-icon"  min="0" value="0" name="md_edit" id="meninggal">
                                                    </div>
                                                </div>   
                                                <div class="col-md-3">
                                                    <div class="d-inline-block mb-1">
                                                        <label for="basicInput">Luka Berat</label>
                                                        <input type="number" class="touchspin-icon"  min="0" value="0" name="lb_edit"id="luka_berat">
                                                    </div>
                                                </div>   
                                                <div class="col-md-3">
                                                    <div class="d-inline-block mb-1">
                                                        <label for="basicInput">Luka Ringan</label>
                                                        <input type="number" class="touchspin-icon"  min="0" value="0" name="lk_edit" id="luka_ringan">
                                                    </div>
                                                </div>   
                                                <div class="col-md-3">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">Kerugian Materi</label>
                                                        <input type="number" name="kermat_edit" class="form-control" id="kermat" value="0" placeholder="ex: 50000" required/>
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
                                                            <select class="select2" name="waktu" required id="waktu">
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
                                        <div class="col-md-6">
                                            <fieldset class="form-group">
                                                <button type="reset" onclick="tutup()" class="btn btn-danger glow mr-1 mb-1"><i class="bx bxs-x-square"></i>
                                                    <span class="align-middle ml-25">Clear Data</span> 
                                                </button>
                                                <button type="button" class="btn btn-warning glow mr-1 mb-1" onclick="simpan_perubahan_data()"><i class="bx bxs-add-to-queue"></i>
                                                    <span class="align-middle ml-25">Edit Data</span>
                                                </button>
                                            </fieldset>
                                        </div>
                                    </div>
                                                        
                                </form>
                            <!-- <form method="post" action="<?php echo base_url('admin/data_kecelakaan/update/'.$data['id_kecelakaan']) ?>" enctype="multipart/form-data" class="wizard-horizontal">
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

                                                            <?php foreach ($data_kecamatan as $k) :?>
                                                                <?php foreach ($data_by_id as $dt) :
                                                                    if($dt['id_kecamatan'] == $k['id_kecamatan']):?>
                                                                        <option value="<?php echo$k['id_kecamatan'] ?>" ><?php echo$k['nama_kecamatan'] ?></option>
                                                                    <?php else:?>
                                                                        <option value="<?php echo$k['id_kecamatan'] ?>"><?php echo$k['nama_kecamatan'] ?></option>
                                                                    <?php endif; endforeach ?>)
                                                            <?php endforeach ?>
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
                                                            <?php foreach ($data_wilayah as $w) :?>
                                                                <?php foreach ($data_by_id as $dt) :
                                                                    if($dt['id_kelurahan'] == $w['id_kelurahan']):?>
                                                                        <option value="<?php echo$w['id_kelurahan'] ?>" ><?php echo$w['nama_kelurahan'] ?></option>
                                                                    <?php else:?>
                                                                        <option value="<?php echo$w['id_kelurahan'] ?>"><?php echo$w['nama_kelurahan'] ?></option>
                                                                    <?php endif; endforeach ?>)
                                                            <?php endforeach ?>
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
                            </form>  -->
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
        <?php foreach ($data_all as $key) : ?>

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

            var myIcon = new L.Icon({
                iconUrl: '<?php echo base_url("assets"); ?>/admin/icon/marker-icon-red.png',
                shadowUrl: '<?php echo base_url("assets"); ?>/admin/icon/marker-shadow.png',
                // iconSize: [40, 45], // size of the icon
            });

            // map.attributionControl.setPrefix(false);

            var curLocation = [<?= $key['latitude'] ?>,<?= $key['longitude'] ?>];

            // var marker = new L.marker(curLocation, 
            // {
            //     icon: myIcon,
            // });

            // marker.on('dragend', function(event)
            // {
            //     var position = marker.getLatLng();
            //     marker.setLatLng(position, {
            //         draggable: 'true',
            //     }).bindPopup(position).update();
            //     $("#longitude").val(position.lng);
            //     $("#latitude").val(position.lat);
            // });
            // map.addLayer(marker);
            var mark = new L.marker(curLocation);
            map.addLayer(mark);

            var latInput = document.querySelector("[name=lat_edit]");
            var lngInput = document.querySelector("[name=lng_edit]");

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
            map.on('click', onMapClicktambah)
        <?php endforeach ;?>

</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function() {
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
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            confirmButtonClass: 'btn btn-warning',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                window.location = "<?php echo base_url('admin/Data_kecelakaan') ?>" ;
            }
            else if (result.dismiss === Swal.DismissReason.cancel) {
               
            }
        })
            // swal({
            //     title: "Cancel Edit Data?",
            //     text: "Data Akan Direset Ulang !",
            //     icon: "warning",
            //     buttons: true,
            //     dangerMode: true,
            //     })
            //     .then((willDelete) => {
            //     if (willDelete) {
            //         window.location = "<?php echo base_url('admin/Data_kecelakaan') ?>" ;
            //     } else {
            //         // swal("Data Tidak Terhapus !");
            //     }
            // });
    }
</script>
<script type="text/javascript">
	$(document).ready(function() {
        var wrapper = document.getElementById("tabel-data-kecelakaan");
        $.ajax({
            url: "<?=base_url('admin/Data_kecelakaan/show_data_edit_kecelakaan/'.$longitude.'/'.$latitude)?>",
            success: function (response) {
                $(wrapper).html(response);
            }
        });
    });

    function hapus_data_kecelakaan(id_kecelakaan){
        console.log(id_kecelakaan);
    }

    function edit_data_kecelakaan(id_kecelakaan){
        $("#meninggal").focus();
        $.ajax({
            url: "<?=base_url('admin/Data_kecelakaan/get_data_kecelakaan_id/')?>"+id_kecelakaan,
            dataType: 'json',
            success: function (data) {
                for (let i = 0; i < data.length; i++) {
                    $("#id_kecelakaan").val(data[i].id_kecelakaan);
                    $("#meninggal").val(data[i].meninggal_dunia);
                    $("#luka_ringan").val(data[i].luka_ringan);
                    $("#luka_berat").val(data[i].luka_berat);
                    $("#kermat").val(data[i].kerugian_materi);
                    $("#waktu").val(data[i].id_waktu).trigger('change');
                    $("#jenis_kendaraan").val(data[i].id_jenis).trigger('change') ;
                    $("#profesi").val(data[i].id_profesi).trigger('change') ;
                    $("#umur").val(data[i].id_umur).trigger('change') ;
                    $("#type").val(data[i].id_type).trigger('change') ;
                }
            }
        });
    }

    function simpan_perubahan_data(){
            var id_kecelakaan   = $("#id_kecelakaan").val();
            var meninggal       = $("#meninggal").val();
            var luka_berat      = $("#luka_ringan").val();
            var luka_ringan     = $("#luka_berat").val();
            var kermat          = $("#kermat").val();
            var waktu           = $("#waktu").val();
            var jenis_kendaraan = $("#jenis_kendaraan").val();
            var profesi         = $("#profesi").val();
            var umur            = $("#umur").val();
            var type            = $("#type").val();
            
            $.ajax({
                type: "Post",
                url: "<?=base_url('admin/Data_kecelakaan/update_data_kecelakaan/')?>"+id_kecelakaan,
                data: {
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
                        alert('sukses data kecelakaan berhasil diupdate');
                        // form input di reset
                        $("#id_kecelakaan").val("");
                        $("#meninggal").val(0);
                        $("#luka_ringan").val(0);
                        $("#luka_berat").val(0);
                        $("#kermat").val("");
                        $("#waktu").val('').trigger('change') ;
                        $("#jenis_kendaraan").val('').trigger('change') ;
                        $("#profesi").val('').trigger('change') ;
                        $("#umur").val('').trigger('change') ;
                        $("#type").val('').trigger('change') ;

                        $.ajax({
                            url: "<?=base_url('admin/Data_kecelakaan/show_data_edit_kecelakaan/'.$longitude.'/'.$latitude)?>",
                            success: function (response) {
                                $("#tabel-data-kecelakaan").html(response);
                            }
                        });

                    }else{
                        alert('semuan inputan wajib diisi!');
                    }
                }
            });
    }
</script>