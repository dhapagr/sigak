<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets"); ?>/admin/vendors/css/animate/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets"); ?>/admin/vendors/css/extensions/sweetalert2.min.css">
<script src="<?php echo base_url("assets"); ?>/admin/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/vendors/js/extensions/polyfill.min.js"></script>
<script src="<?php echo base_url("assets"); ?>/admin/js/scripts/extensions/sweet-alerts.js"></script>

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
                                <li class="breadcrumb-item ">Data Laporan | Data laporan
                            </ol>
                            
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->session->flashdata('test');?>
            <div class="content-body">
                <div class="row">
                    <div>
                        <div class="card-body">
                            <ul class="nav user-profile-nav justify-content-center justify-content-md-start nav-pills border-bottom-0 mb-0" role="tablist">
                                <li class="nav-item mb-0">
                                    <a class=" nav-link d-flex px-1" href="<?=base_url('admin/Data_laporan/')?>" aria-selected="false"><i class="bx bxs-message-rounded-dots"></i><span class="d-none d-md-block">Pengaduan Terjawab</span></a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link d-flex px-1 " href="<?=base_url('admin/Data_laporan/pengaduan_blm_jwb/')?>" role="tab" aria-selected="false"><i class="bx bxs-message-rounded-dots"></i><span class="d-none d-md-block">Pengaduan Belum Terjawab</span></a>
                                </li>
                                <li class="nav-item mb-0 " >
                                    <a class="nav-link d-flex px-1 active" href="<?=base_url('admin/Data_laporan/feedback/')?>" role="tab" aria-selected="false"><i class="bx bxs-message-rounded-dots"></i><span class="d-none d-md-block">Feedback</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Pengaduan</h4>
                                </div>
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pengirim</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Isi</th>
                                                    <th>Aksi</th>
                                                </tr>                                                     
                                            </thead>
                                            <tbody>
                                            <?php $no=1; foreach($data_feedback as $feedback): ?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$feedback['nama']?></td>
                                                    <td><?=$feedback['email']?></td>
                                                    <td><?=$feedback['subject']?></td>
                                                    <td><?=$feedback['isi']?></td>
                                                   
                                                    <td>
                                                        <div  class="form-row">
                                                            <button type="button" onclick="detail(<?php echo $feedback['id_feedback'] ?>)" class="btn btn-icon btn-info mr-1 mb-1" data-toggle="modal" data-target="#myModal<?= $feedback['id_feedback']?>"><i class="bx bx-info-circle"></i></button>
                                                            <button type="button" onclick="hapus(<?php echo $feedback['id_feedback'] ?>)" class="btn btn-icon btn-danger mr-1 mb-1"><i class="bx bxs-trash"></i></button>
                                                        </div>     
                                                    </td>
                                                </tr>
                                            <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div id="tempel-modal"></div>
            </div>
        </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

    function detail(id_feedback)
    {
        // var id_feedback = $(this).data('id');
        $.ajax({
            url: "<?=base_url('admin/Data_laporan/get_detail_feedback/')?>"+id_feedback,
            success: function (response) {
                console.log(response);
                $('#tempel-modal').html(response);
                $('#modal-detail-feedback').modal('show');
            }
        });
    }
    function hapus(id_feedback)
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
                window.location = "<?php echo base_url('admin/Data_laporan/hapus_feedback/') ?>" + id_feedback;
            }
            else if (result.dismiss === Swal.DismissReason.cancel) {
            
            }
        })
    }

    // });
</script>