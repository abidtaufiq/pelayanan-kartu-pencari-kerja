<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("perusahaan/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("perusahaan/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("perusahaan/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pencari Kerja</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pencaker</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Table Data Pencaker</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>NO Pendaftar</th>
                                                <th>NIK</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Status Perkawinan</th>
                                                <th>Tinggi Badan</th>
                                                <th>Berat Badan</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Jurusan</th>
                                                <th>Pengalaman Kerja</th>
                                                <th>No HP</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Kode Pos</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                                <th>Foto KTP</th>
                                                <th>Foto Ijazah</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Status Verifikasi</th>
                                                <th>Status Perpanjangan</th>
                                                <th>Status Aktif</th>
                                                <th>Mulai Berlaku</th>
                                                <th>Akhir Berlaku</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $id = 0;
                                            foreach($user as $i)
                                            :
                                            $id++;
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $id_user = $i['id_user'];
                                            $nik = $i['nik']; 
                                            $no_pendaftaran = $i['no_pendaftaran']; 
                                            $nama_lengkap = $i['nama_lengkap']; 
                                            $tempat_lahir = $i['tempat_lahir']; 
                                            $tanggal_lahir = $i['tanggal_lahir']; 
                                            $jenis_kelamin = $i['jenis_kelamin']; 
                                            $agama = $i['agama']; 
                                            $status_perkawinan = $i['status_perkawinan']; 
                                            $tinggi_badan = $i['tinggi_badan'];
                                            $berat_badan = $i['berat_badan'];
                                            $pendidikan_terakhir = $i['pendidikan_terakhir']; 
                                            $jurusan = $i['jurusan'];
                                            $pengalaman_kerja = $i['pengalaman_kerja'];
                                            $no_hp = $i['no_hp'];
                                            $provinsi = $i['provinsi'];
                                            $kota = $i['kota'];
                                            $kode_pos = $i['kode_pos'];
                                            $alamat = $i['alamat'];
                                            $foto_saya = $i['foto_saya'];
                                            $foto_ktp = $i['foto_ktp'];
                                            $foto_ijazah = $i['foto_ijazah'];
                                            $date_registered = $i['date_registered'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            $id_status_perpanjangan = $i['id_status_perpanjangan'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $mulai_berlaku = $i['mulai_berlaku'];
                                            $akhir_berlaku = $i['akhir_berlaku'];
                                            

                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$username ?></td>
                                                <td><?=$email?></td>
                                                <td><?=$no_pendaftaran?></td>
                                                <td><?=$nik?></td>
                                                <td><?=$nama_lengkap?></td>
                                                <td><?=$tempat_lahir?></td>
                                                <td><?=$tanggal_lahir?></td>
                                                <td><?=$jenis_kelamin?></td>
                                                <td><?=$agama?></td>
                                                <td><?=$status_perkawinan?></td>
                                                <td><?=$tinggi_badan?></td>
                                                <td><?=$berat_badan?></td>
                                                <td><?=$pendidikan_terakhir?></td>
                                                <td><?=$jurusan?></td>
                                                <td><?=$pengalaman_kerja?></td>
                                                <td><?=$no_hp?></td>
                                                <td><?=$provinsi?></td>
                                                <td> <?=$kota?></td>
                                                <td><?=$kode_pos?></td>
                                                <td><?=$alamat?></td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_saya?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_saya?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_ktp?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_ktp?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_ijazah?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_ijazah?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td><?=$date_registered?></td>
                                                <td><?php if($id_status_verifikasi == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_verifikasi == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Sudah Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td><?php if($id_status_aktif == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Aktif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_aktif == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Selesai Aktif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td><?php if($id_status_perpanjangan == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Membutuhkan Perpanjang
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_perpanjangan == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Membutuhkan Perpanjangan
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td><?php if($mulai_berlaku){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                <?=$mulai_berlaku?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }else {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Ada
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td><?php if($akhir_berlaku){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                <?=$akhir_berlaku?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }else {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Ada
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?></td>

                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("perusahaan/components/js.php") ?>
</body>

</html>