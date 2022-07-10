
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="widgets-Statistics">
                    <div class="row">
                        <div class="col-12 mt-1 mb-2">
                            <h4>Data Statistik</h4>
                            <?php foreach($data_user as $data) :?>
                                <h4><?php echo $data['email_user']?></h4>
                            <?php endforeach?>
                            <hr>
                        </div>
                    </div>
                    <!--  -->
                    <div class="justify-content-center">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                                            <i class="bx bx-target-lock font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Data Kecelakaan</p>
                                        <h2 class="mb-0"><?php echo $dt_kecelakaan?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                            <i class="bx bxs-file-blank font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Data Wilayah | Kelurahan</p>
                                        <h2 class="mb-0"><?php echo $dt_kelurahan?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                                            <i class="bx bxs-comment-error font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Data Pengaduan</p>
                                        <h2 class="mb-0"><?php echo $dt_pengaduan?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
                                            <i class="bx bxs-message-rounded-dots font-medium-5"></i>
                                        </div>
                                        <p class="text-muted mb-0 line-ellipsis">Feedback</p>
                                        <h2 class="mb-0"><?php echo $dt_pengaduan_blm_jawab?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                   
                   
                </section>
                <!-- Dashboard Ecommerce ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

