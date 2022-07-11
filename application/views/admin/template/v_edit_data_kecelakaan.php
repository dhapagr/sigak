<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/vendors/css/tables/datatable/buttons.bootstrap4.min.css">

<div style="overflow-y: auto;" >
    <div class="table-responsive" style="max-width: 900px;">
        <table class="table zero-configuration">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>MD</th>
                    <th>LB</th>
                    <th>LR</th>
                    <th>KERMAT</th>
                    <th>Waktu</th>
                    <th>Kendaraan</th>
                    <th>Profesi</th>
                    <th>Umur</th>
                    <th>Kejadian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; 
                foreach($data_kecelakaan as $dt_kecelakaan): ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $dt_kecelakaan['meninggal_dunia']?></td>
                    <td><?= $dt_kecelakaan['luka_berat']?></td>
                    <td><?= $dt_kecelakaan['luka_ringan']?></td>
                    <td><?= $dt_kecelakaan['kerugian_materi']?></td>
                    <td>
                        <?php foreach($data_waktu as $dt_waktu): 
                            if($dt_waktu['id_waktukej'] == $dt_kecelakaan['id_waktu']):
                                echo $dt_waktu['jenis_waktu'];
                            endif; 
                        endforeach;?>
                    </td>
                    <td>
                        <?php foreach($data_kendaraan as $dt_kendaraan): 
                            if($dt_kendaraan['id_jenis'] == $dt_kecelakaan['id_jenis']):
                                echo $dt_kendaraan['jenis_kendaraan'];
                            endif; 
                        endforeach;?>
                    </td>
                    <td>
                        <?php foreach($data_profesi as $dt_profesi): 
                            if($dt_profesi['id_profesi'] == $dt_kecelakaan['id_profesi']):
                                echo $dt_profesi['profesi'];
                            endif; 
                        endforeach;?>
                    </td>
                    <td>
                        <?php foreach($data_umur as $dt_umur): 
                            if($dt_umur['id_umur'] == $dt_kecelakaan['id_umur']):
                                echo $dt_umur['umur'];
                            endif; 
                        endforeach;?>
                    </td>
                    <td>
                        <?php foreach($data_type as $dt_type): 
                            if($dt_type['id_type'] == $dt_kecelakaan['id_type']):
                                echo $dt_type['type_kejadian'];
                            endif; 
                        endforeach;?>
                    </td>
                    <td>
                        <a href="#edit_data_kecelakaan" class="btn btn-warning btn-sm col-12 mb-1" type="button" onclick="edit_data_kecelakaan(<?=$dt_kecelakaan['id_kecelakaan']?>)">Edit</a>
                        <button class="btn btn-danger btn-sm col-12" type="button" onclick="hapus_data_kecelakaan(<?=$dt_kecelakaan['id_kecelakaan']?>)">Hapus</button>
                    </td>
                </tr>
                <?php endforeach;?>            
            </tbody>
        </table>
    </div>
</div>

<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/vfs_fonts.js"></script>

<script src="<?=base_url()?>assets/admin/js/scripts/datatables/datatable.js"></script>

