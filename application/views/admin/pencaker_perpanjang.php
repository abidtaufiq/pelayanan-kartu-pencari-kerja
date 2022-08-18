<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('update')){ ?>
    <script>
    swal({
        title: "Berhasil Diubah!",
        text: "Data Berhasil Diubah!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Ditambahakan!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('delete')){ ?>
    <script>
    swal({
        title: "Berhasil Dihapus!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_send')){ ?>
    <script>
    swal({
        title: "Gagal Diiupdate!",
        text: "Pesan gagal dikirim!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('input_status_verifikasi')){ ?>
    <script>
    swal({
        title: "Berhasil Diiupdate!",
        text: "Data Kartu Telah diverifikasi!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_status_verifikasi')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('input_status_aktif')){ ?>
    <script>
    swal({
        title: "Berhasil Diiupdate!",
        text: "Data Kartu Telah aktif!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_status_aktif')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('input_status_perpanjangan')){ ?>
    <script>
    swal({
        title: "Berhasil Diiupdate!",
        text: "Data Kartu Telah Diperpanjang!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_status_perpanjangan')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/components/sidebar.php") ?>

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
                        <!-- <div class="row mb-3 mt-3 ml-2">
                            <form action="<?=base_url();?>Cetak/laporan_perbulan" method="POST">
                                <div class="form-group">
                                    <div class="col">
                                        <label for="bulan">Pilih Bulan</label>
                                        <select class="form-control" id="bulan" name="bulan">
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Cetak Laporan</button>
                                </div>
                            </form>
                        </div> -->
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
                                    <h3 class="card-title">Table Data Pencaker Perpanjang</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- <div class="row">
                                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                            data-target="#tambah_pencaker">
                                            Tambah User
                                        </button>
                                    </div> -->
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>No Pendaftar</th>
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
                                                <th>Foto Akte</th>
                                                <th>Foto Surat Pengalaman Kerja</th>
                                                <th>Foto Transkrip Nilai</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Status Verifikasi</th>
                                                <th>Status Aktif</th>
                                                <th>Status Perpanjangan</th>
                                                <th>Mulai Berlaku</th>
                                                <th>Akhir Berlaku</th>
                                                <!-- <th>Verifikasi Data</th> -->
                                                <!-- <th>Aksi</th> -->
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
                                            $foto_akte = $i['foto_akte'];
                                            $foto_surat_pengalaman_kerja = $i['foto_surat_pengalaman_kerja'];
                                            $foto_transkrip_nilai = $i['foto_transkrip_nilai'];
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
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_akte?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_akte?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php if($foto_surat_pengalaman_kerja != ""){?>
                                                        <a href="<?= base_url();?>assets/berkas/<?php echo $foto_surat_pengalaman_kerja?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_surat_pengalaman_kerja?>"
                                                                style="width: 25%"> </a>
                                                        <?php } else {?>
                                                        <h3>Foto Belum Ada</h3>
                                                        <?php } ?>
                                                    </center>

                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_transkrip_nilai?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_transkrip_nilai?>"
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
                                                <td><?=$mulai_berlaku?></td>
                                                <td><?=$akhir_berlaku?></td>
                                                <!-- <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#verifikasi_data<?=$id_user?>">
                                                                Verifikasi Data <i class="nav-icon fas fa-users"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <?php if($id_status_verifikasi == 1){?>

                                                    <?php }else{?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#aktifkan_kartu<?=$id_user?>"
                                                                class="btn btn-primary">Aktifkan Kartu <i
                                                                    class="fas fa-check"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                    <?php if($id_status_aktif == 2 AND $id_status_verifikasi == 2){?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#ubah_status_perpanjangan<?=$id_user?>"
                                                                class="btn btn-primary">Status Perpanjangan <i
                                                                    class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }else{?>

                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#ubah_pencaker<?=$id_user?>">
                                                                Edit <i class="nav-icon fas fa-edit"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#delete_pencaker<?=$id_user?>"
                                                                class="btn btn-danger">Hapus <i
                                                                    class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td> -->
                                            </tr>
                                            <!-- Modal Verfikasi Data -->
                                            <div class="modal fade" id="verifikasi_data<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi
                                                                Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>Pencaker/verifikasi_data"
                                                                method="POST">
                                                                <input type="text" name="email" value="<?=$email?>"
                                                                    hidden>
                                                                <input type="text" name="id_user" value="<?=$id_user?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="status_verifikasi">Status
                                                                        Verifikasi</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1"
                                                                        name="status_verifikasi" required>
                                                                        <?php
                                                                        foreach($status_verifikasi_data as $i)
                                                                        :
                                                                        $id_status_verifikasi_option = $i['id_status_verifikasi'];
                                                                        $status_verifikasi_option = $i['status_verifikasi'];
                                                                        ?>
                                                                        <option
                                                                            value="<?=$id_status_verifikasi_option?>">
                                                                            <?=$status_verifikasi_option?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pesan">Pesan</label>
                                                                    <textarea class="form-control" id="pesan" rows="3"
                                                                        name="pesan" required></textarea>
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Aktifkan Data -->
                                            <div class="modal fade" id="aktifkan_kartu<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Aktifikan
                                                                Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>Pencaker/aktif_data"
                                                                method="POST">
                                                                <input type="text" name="email" value="<?=$email?>"
                                                                    hidden>
                                                                <input type="text" name="id_user" value="<?=$id_user?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="status_aktif">Status
                                                                        Aktif</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1"
                                                                        name="status_aktif" required>
                                                                        <option value="2">Aktifkan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pesan" required>Pesan</label>
                                                                    <textarea class="form-control" id="pesan" rows="3"
                                                                        name="pesan"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="mulai_berlaku">Mulai Berlaku</label>
                                                                    <input type="date" class="form-control"
                                                                        id="mulai_berlaku" name="mulai_berlaku"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="akhir_berlaku">Akhir Berlaku</label>
                                                                    <input type="date" class="form-control"
                                                                        id="akhir_berlaku" name="akhir_berlaku"
                                                                        required>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Status Perpanjangan -->
                                            <div class="modal fade" id="ubah_status_perpanjangan<?=$id_user?>"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Status
                                                                Perpanjangan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form
                                                                action="<?=base_url();?>Pencaker/ubah_status_perpanjangan"
                                                                method="POST">
                                                                <input type="text" name="email" value="<?=$email?>"
                                                                    hidden>
                                                                <input type="text" name="id_user" value="<?=$id_user?>"
                                                                    hidden>
                                                                <div class="form-group">
                                                                    <label for="status_perpanjangan">Status
                                                                        Aktif</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1"
                                                                        name="status_perpanjangan" required>
                                                                        <?php
                                                                        foreach($status_perpanjangan_data as $i)
                                                                        :
                                                                        $id_status_perpanjangan_option = $i['id_status_perpanjangan'];
                                                                        $status_perpanjangan_option = $i['status_perpanjangan'];
                                                                        ?>
                                                                        <option
                                                                            value="<?=$id_status_perpanjangan_option?>">
                                                                            <?=$status_perpanjangan_option?></option>
                                                                        <?php endforeach;?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pesan">Pesan</label>
                                                                    <textarea class="form-control" id="pesan" rows="3"
                                                                        name="pesan" required></textarea>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Ubah Data -->
                                            <div class="modal fade" id="ubah_pencaker<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                                Pencaker
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="<?=base_url();?>Pencaker/update_pencaker"
                                                                enctype="multipart/form-data" method="POST">
                                                                <input type="text" value="<?=$id_user?>" name="id_user"
                                                                    hidden>
                                                                <input type="text" value="<?=$id_status_verifikasi?>"
                                                                    name="id_status_verifikasi" hidden>
                                                                <input type="text" value="<?=$id_status_perpanjangan?>"
                                                                    name="id_status_perpanjangan" hidden>
                                                                <input type="text" value="<?=$id_status_aktif?>"
                                                                    name="id_status_aktif" hidden>
                                                                <div class="form-group">
                                                                    <label for="no_pendaftaran">No Pendaftaran</label>
                                                                    <input type="text" class="form-control"
                                                                        id="no_pendaftaran" name="no_pendaftaran"
                                                                        aria-describedby="emailHelp"
                                                                        value="<?=$no_pendaftaran?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nik">NIK</label>
                                                                    <input type="text" class="form-control" id="nik"
                                                                        name="nik" aria-describedby="emailHelp"
                                                                        value="<?=$nik?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama_lengkap" name="nama_lengkap"
                                                                        value="<?=$nama_lengkap?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tempat_lahir">Tempat lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tempat_lahir" name="tempat_lahir"
                                                                        value="<?=$tempat_lahir?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control"
                                                                        id="tanggal_lahir" name="tanggal_lahir"
                                                                        value="<?=$tanggal_lahir?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Jenis
                                                                        Kelamin</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1"
                                                                        name="jenis_kelamin" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2' OR $id_status_verifikasi == '2' OR $akhir_berlaku != NULL){
                                                                                            echo 'required';
                                                                                        }else{
                                                                                            echo '';
                                                                                        }  ?>>
                                                                        <option value="L" <?php  if($jenis_kelamin == 'L'){
                                                                                            echo 'selected';
                                                                                        }else{
                                                                                            echo '';
                                                                                        }  ?>>Laki-Laki</option>
                                                                        <option value="P" <?php  if($jenis_kelamin == 'P'){
                                                                                            echo 'selected';
                                                                                        }else{
                                                                                            echo '';
                                                                                        }  ?>>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="agama">Agama</label>
                                                                    <input type="text" class="form-control" id="agama"
                                                                        name="agama" value="<?=$agama?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status_perkawinan">Status
                                                                        Perkawinan</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1"
                                                                        name="status_perkawinan" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2' OR $id_status_verifikasi == '2' OR $akhir_berlaku != NULL){
                                        echo 'required';
                                    }else{
                                        echo '';
                                    }  ?>>
                                                                        <option value="Kawin" <?php  if($status_perkawinan == 'Kawin'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Kawin</option>
                                                                        <option value="Belum Kawin" <?php  if($status_perkawinan == 'Belum Kawin'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Belum Kawin</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tinggi_badan">Tinggi Badan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tinggi_badan" name="tinggi_badan"
                                                                        value="<?=$tinggi_badan?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="berat_bedan">Berat Badan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="berat_badan" name="berat_badan"
                                                                        value="<?=$berat_badan?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pendidikan_terakhir">Pendidikan
                                                                        Terakhir</label>
                                                                    <select class="form-control"
                                                                        id="pendidikan_terakhir"
                                                                        name="pendidikan_terakhir" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2' OR $id_status_verifikasi == '2' OR $akhir_berlaku != NULL){
                                        echo 'required';
                                    }else{
                                        echo '';
                                    }  ?>>
                                                                        <option value="SD" <?php  if($pendidikan_terakhir == 'SD'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>SD</option>
                                                                        <option value="SMP" <?php  if($pendidikan_terakhir == 'SMP'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>SMP</option>
                                                                        <option value="SMA" <?php  if($pendidikan_terakhir == 'SMA'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>SMA</option>
                                                                        <option value="D1" <?php  if($pendidikan_terakhir == 'D1'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>D1</option>
                                                                        <option value="D2" <?php  if($pendidikan_terakhir == 'D2'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>D2</option>
                                                                        <option value="D3" <?php  if($pendidikan_terakhir == 'D3'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>D3</option>
                                                                        <option value="S1" <?php  if($pendidikan_terakhir == 'S1'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>S1</option>
                                                                        <option value="D4" <?php  if($pendidikan_terakhir == 'D4'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>D4</option>
                                                                        <option value="S2" <?php  if($pendidikan_terakhir == 'S2'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>S2</option>
                                                                        <option value="S3" <?php  if($pendidikan_terakhir == 'S3'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>S3</option>
                                                                        <option value="Profesor" <?php  if($pendidikan_terakhir == 'Profesor'){
                                        echo 'selected';
                                    }else{
                                        echo '';
                                    }  ?>>Profesor</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jurusan">Jurusan</label>
                                                                    <input type="text" class="form-control" id="jurusan"
                                                                        name="jurusan" value="<?=$jurusan?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pengalaman_kerja">Pengalaman
                                                                        Kerja</label>
                                                                    <textarea class="form-control" id="pengalaman_kerja"
                                                                        name="pengalaman_kerja" rows="3"
                                                                        required><?=$pengalaman_kerja?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_hp">No NP</label>
                                                                    <input type="text" class="form-control" id="no_hp"
                                                                        name="no_hp" value="<?=$no_hp?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="provinsi">Provinsi</label>
                                                                    <input type="text" class="form-control"
                                                                        id="provinsi" name="provinsi"
                                                                        value="<?=$provinsi?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kota">Kota</label>
                                                                    <input type="text" class="form-control" id="kota"
                                                                        name="kota" value="<?=$kota?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kode_pos">Kode Pos</label>
                                                                    <input type="text" class="form-control"
                                                                        id="kode_pos" name="kode_pos"
                                                                        value="<?=$kode_pos?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <textarea class="form-control" id="alamat"
                                                                        name="alamat" rows="3"
                                                                        required><?=$alamat?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_saya">Foto</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_saya" name="foto_saya" required>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Masukan Ulang
                                                                        Foto</small>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Format PNG/JPG/JPEG
                                                                        (Max 2MB)</small>
                                                                    <input type="text" class="form-control"
                                                                        id="foto_saya" name="foto_saya_old"
                                                                        value="<?=$foto_saya?>" hidden>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_ktp">Foto KTP</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_ktp" name="foto_ktp" required>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Masukan Ulang
                                                                        Foto</small>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Format PNG/JPG/JPEG
                                                                        (Max 2MB)</small>
                                                                    <input type="text" class="form-control"
                                                                        id="foto_ktp" name="foto_ktp_old"
                                                                        value="<?=$foto_ktp?>" hidden>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_ijazah">Foto Ijazah</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_ijazah" name="foto_ijazah" required>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Masukan Ulang
                                                                        Foto</small>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Format PNG/JPG/JPEG
                                                                        (Max 2MB)</small>
                                                                    <input type="text" class="form-control"
                                                                        id="foto_ijazah" name="foto_ijazah_old"
                                                                        value="<?=$foto_ijazah?>" hidden>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_akte">Foto Akte</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_akte" name="foto_akte" required>
                                                                    <small id="foto_akte"
                                                                        class="form-text text-muted">Masukan Ulang
                                                                        Foto</small>
                                                                    <small id="foto_akte"
                                                                        class="form-text text-muted">Format PNG/JPG/JPEG
                                                                        (Max 2MB)</small>
                                                                    <input type="text" class="form-control"
                                                                        id="foto_akte" name="foto_akte_old"
                                                                        value="<?=$foto_akte?>" hidden>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_surat_pengalaman_kerja">Foto Surat Pengalaman Kerja</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_surat_pengalaman_kerja" name="foto_surat_pengalaman_kerja">
                                                                    
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Format PNG/JPG/JPEG
                                                                        (Max 2MB)</small>
                                                                    <input type="text" class="form-control"
                                                                        id="foto_surat_pengalaman_kerja" name="foto_surat_pengalaman_kerja_old"
                                                                        value="<?=$foto_surat_pengalaman_kerja?>" hidden>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto_transkrip_nilai">Foto Transkrip Nilai</label>
                                                                    <input type="file" class="form-control"
                                                                        id="foto_transkrip_nilai" name="foto_transkrip_nilai" required>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Masukan Ulang
                                                                        Foto</small>
                                                                    <small id="foto_saya"
                                                                        class="form-text text-muted">Format PNG/JPG/JPEG
                                                                        (Max 2MB)</small>
                                                                    <input type="text" class="form-control"
                                                                        id="foto_transkrip_nilai" name="foto_transkrip_nilai_old"
                                                                        value="<?=$foto_transkrip_nilai?>" hidden>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary mb-3">Submit</button>
                                                            </form>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Delete Data -->
                                            <div class="modal fade" id="delete_pencaker<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Data
                                                                Pencaker
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url();?>Pencaker/hapus_pencaker"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id_user"
                                                                            value="<?php echo $id_user?>" />
                                                                        <input type="hidden" name="foto_saya_old"
                                                                            value="<?=$foto_saya?>" hidden>
                                                                        <input type="hidden" name="foto_ktp_old"
                                                                            value="<?=$foto_ktp?>" hidden>
                                                                        <input type="hidden" name="foto_ijazah_old"
                                                                            value="<?=$foto_ijazah?>" hidden>
                                                                        <input type="hidden" name="foto_akte_old"
                                                                            value="<?=$foto_akte?>" hidden>
                                                                        <input type="hidden"
                                                                            name="foto_surat_pengalaman_kerja_old"
                                                                            value="<?=$foto_surat_pengalaman_kerja?>"
                                                                            hidden>
                                                                        <input type="hidden"
                                                                            name="foto_transkrip_nilai_old"
                                                                            value="<?=$foto_transkrip_nilai?>" hidden>

                                                                        <p>Apakah kamu yakin ingin menghapus data
                                                                            ini?</i></b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger ripple"
                                                                        data-dismiss="modal">Tidak</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success ripple save-category">Ya</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
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
        <!-- Modal Tambah Data -->
        <div class="modal fade" id="tambah_pencaker" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                            Pencaker
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url();?>Pencaker/tambah_pencaker" enctype="multipart/form-data"
                            method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="emailHelp"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis
                                    Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin"
                                    required>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" required>
                            </div>
                            <div class="form-group">
                                <label for="status_perkawinan">Status
                                    Perkawinan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status_perkawinan"
                                    required>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tinggi_badan">Tinggi Badan</label>
                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                            </div>
                            <div class="form-group">
                                <label for="berat_bedan">Berat Badan</label>
                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan
                                    Terakhir</label>
                                <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir"
                                    required>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_kerja">Pengalaman
                                    Kerja</label>
                                <textarea class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" rows="3"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No NP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto_saya">Foto</label>
                                <input type="file" class="form-control" id="foto_saya" name="foto_saya" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp">Foto KTP</label>
                                <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                            </div>
                            <div class="form-group">
                                <label for="foto_ijazah">Foto Ijazah</label>
                                <input type="file" class="form-control" id="foto_ijazah" name="foto_ijazah" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                            </div>
                            <div class="form-group">
                                <label for="foto_akte">Foto Akte</label>
                                <input type="file" class="form-control" id="foto_akte" name="foto_akte" required>
                                <small id="foto_akte" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                            </div>
                            <div class="form-group">
                                <label for="foto_surat_pengalaman_kerja">Foto Surat Pengalaman Kerja</label>
                                <input type="file" class="form-control" id="foto_surat_pengalaman_kerja"
                                    name="foto_surat_pengalaman_kerja">
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                            </div>
                            <div class="form-group">
                                <label for="foto_transkrip_nilai">Foto Transkrip Nilai</label>
                                <input type="file" class="form-control" id="foto_transkrip_nilai"
                                    name="foto_transkrip_nilai" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>