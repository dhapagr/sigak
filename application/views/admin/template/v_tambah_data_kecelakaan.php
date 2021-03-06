<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/vendors/css/tables/datatable/buttons.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets"); ?>/admin/vendors/css/animate/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets"); ?>/admin/vendors/css/extensions/sweetalert2.min.css">
<script src="<?php echo base_url("assets"); ?>/admin/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/vendors/js/extensions/polyfill.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/scripts/extensions/sweet-alerts.js"></script>

<div style="overflow-y: auto;" >
    <div class="table-responsive" style="max-width: 1080px;">
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
                <tr id="row<?=$dt_kecelakaan['id_kecelakaan']?>">
                    <td><?= $no++?></td>
                    <td><?= $dt_kecelakaan['meninggal_dunia']?></td>
                    <td><?= $dt_kecelakaan['luka_berat']?></td>
                    <td><?= $dt_kecelakaan['luka_ringan']?></td>
                    <td><?= $dt_kecelakaan['kerugian_materi']?></td>
                    <td><?= $dt_kecelakaan['id_waktu']?></td>
                    <td><?= $dt_kecelakaan['id_jenis']?></td>
                    <td><?= $dt_kecelakaan['id_profesi']?></td>
                    <td><?= $dt_kecelakaan['id_umur']?></td>
                    <td><?= $dt_kecelakaan['id_type']?></td>
                    <td>
                        <!-- <button class="btn btn-warning btn-sm col-12 mb-1" type="button">Edit</button> -->
                        <button class="btn btn-danger btn-sm col-12" type="button" onclick="hapus_dt_kolom(<?=$dt_kecelakaan['id_kecelakaan']?>)">Hapus</button>
                    </td>
                </tr>
                <?php endforeach;?>            
            </tbody>
        </table>
    </div>
</div>
<script>
    function hapus_dt_kolom(id)
    {
        Swal.fire({
            title: 'Are you sure?',
            text: "Hapus Data",
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
                $.ajax({
                    url: "<?=base_url('admin/Data_kecelakaan/hapus_dt_kolom_add/')?>"+id,
                    success: function (response) {
                        // alert('sukses data kecelakaan berhasil dihapus');
                        document.getElementById("row"+id).remove();
                    }
                });           
            }
            else if (result.dismiss === Swal.DismissReason.cancel) {
            
            }
        })
    }
</script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendors/js/tables/datatable/vfs_fonts.js"></script>

<script src="<?=base_url()?>assets/admin/js/scripts/datatables/datatable.js"></script>

