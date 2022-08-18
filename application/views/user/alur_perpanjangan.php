<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("user/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("user/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Alur Perpanjangan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Alur Perpanjangan Kartu AK1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid mb-2">
                    
                    <h2 class="text-center" style="margin-top:50px;">Alur Perpanjangan Kartu AK1</h2>
                    <div style="margin-top:50px;">
                        <div class="row">
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/permohonan.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">1. Pemohon Login dan lengkapi profile anda jika ada perubahan
                                        data dengan melampirkan syarat dan form pengajuan perpanjangan dapat diakses.</p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_right.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/hp.jpg" width="100px"
                                        alt="Permohonan" width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">2. Login dan lengkapi profile anda dengan melampirkan syarat
                                    </p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_right.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/syarat.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row">
                                    <p>1. Softcopy KTP (dalam bentuk jpg/pdf)</p>
                                    <p> 2. Softcopy asli
                                        ijazah
                                        terakhir (dalam bentuk jpg/pdf)</p>
                                    <p> 3. Softocpy pas photo terbaru (dalam bentuk
                                        jpg/pdf) </p>
                                    <p> 4. Softcopy surat keterangan pengalaman kerja jika ada (dalam bentuk
                                        jpg/pdf)</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col mt-5 mb-5 d-flex justify-content-center" style="margin-right:860px;">
                                <div class="row ">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_top.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>

                            <div class="col mt-5 mb-5 d-flex justify-content-center">
                                <div class="row  ">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_down.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/cetak.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">

                                    <p class="text-center">5. Pemohon dapat mencetak mandiri kartu AK 1</p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_left.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/operator.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">4. Operator akan memverifikasi anda dan mengaktifkan button
                                        print
                                        Kartu Pencari Kerja/AK1 di akun anda. </p>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/arrow_left.png" alt="Permohonan"
                                        width="100px">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content-center">
                                    <img src="<?=base_url();?>assets/alur_pendaftaran/request.png" alt="Permohonan"
                                        width="200px">
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <p class="text-center">3. Silahkan request pencetakan Kartu Pencari Kerja / AK 1
                                        anda
                                        pada hari dan jam kerja. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("user/components/js.php") ?>
</body>

</html>