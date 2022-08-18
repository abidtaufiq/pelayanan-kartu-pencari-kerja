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
        text: "Data Perusahaan Telah diverifikasi!",
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
        text: "Data Perusahaan Telah aktif!",
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
                            <h1 class="m-0">Data Perusahaan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Perusahaan</li>
                            </ol>
                        </div><!-- /.col -->
                        <button type="button" class="btn btn-primary mt-3 ml-2" data-toggle="modal"
                            data-target="#tambah_perusahaan">
                            Tambah Perusahaan
                        </button>
                        <a type="button" href="<?=base_url();?>Cetak/laporan_perusahaan" class="btn btn-primary mt-3 ml-2" target="_blank">
                            Cetak Laporan
                        </a>
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
                                    <h3 class="card-title">Table Data Perusahaan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Jenis Perusahaan</th>
                                                <th>NPWP Perusahaan</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Alamat</th>
                                                <th>Kode Pos</th>
                                                <th>Deskripsi</th>
                                                <th>Nomor Telepon</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Logo Perusahaan</th>
                                                <th>Status Verifikasi</th>
                                                <th>Status Aktif</th>
                                                <th>Validasi Data</th>
                                                <th>Aksi</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $id = 0;
                                            foreach($perusahaan as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_perusahaan_detail'];
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $nama_perusahaan = $i['nama_perusahaan'];
                                            $jenis_perusahaan = $i['jenis_perusahaan'];
                                            $npwp_perusahaan = $i['npwp_perusahaan'];
                                            $provinsi = $i['provinsi'];
                                            $kota = $i['kota'];
                                            $alamat = $i['alamat'];
                                            $kode_pos = $i['kode_pos'];
                                            $deskripsi = $i['deskripsi'];
                                            $nomor_telepon = $i['nomor_telepon'];
                                            $date_registered = $i['date_registered'];
                                            $logo = $i['logo'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            
                                            

                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$username?></td>
                                                <td><?=$email?> </td>
                                                <td><?=$nama_perusahaan?></td>
                                                <td><?=$jenis_perusahaan?></td>
                                                <td><?=$npwp_perusahaan?></td>
                                                <td><?=$provinsi?></td>
                                                <td><?=$kota?></td>
                                                <td><?=$alamat?></td>
                                                <td><?=$kode_pos?></td>
                                                <td><?=$deskripsi?></td>
                                                <td><?=$nomor_telepon?></td>
                                                <td><?=$date_registered?></td>
                                                <td>
                                                    <center> <a href="<?= base_url();?>assets/logo/<?php echo $logo?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/logo/<?php echo $logo?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
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
                                                <td>
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
                                                                data-target="#aktifkan_perusahaan<?=$id_user?>"
                                                                class="btn btn-primary">Aktifkan Akun <i
                                                                    class="fas fa-check"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#ubah_perusahaan<?=$id_user?>">
                                                                Edit <i class="nav-icon fas fa-edit"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#delete_perusahaan<?=$id_user?>"
                                                                class="btn btn-danger">Hapus <i
                                                                    class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                            <form action="<?=base_url();?>Perusahaan/verifikasi_data"
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
                                            <div class="modal fade" id="aktifkan_perusahaan<?=$id_user?>" tabindex="-1"
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
                                                            <form action="<?=base_url();?>Perusahaan/aktif_data"
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
                                                                        <?php
                                                                        foreach($status_aktif_data as $i)
                                                                        :
                                                                        $id_status_aktif_option = $i['id_status_aktif'];
                                                                        $status_aktif_option = $i['status_aktif'];
                                                                        ?>
                                                                        <option value="<?=$id_status_aktif_option?>">
                                                                            <?=$status_aktif_option?></option>
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
                                            <div class="modal fade" id="ubah_perusahaan<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                                Perusahaan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>Perusahaan/update_perusahaan"
                                                                method="POST" enctype="multipart/form-data">

                                                                <input type="text" name="id_user" id="id_user"
                                                                    value="<?=$id_user?>" hidden>

                                                                <div class="form-group">
                                                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama_perusahaan" name="nama_perusahaan"
                                                                        value="<?=$nama_perusahaan?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jenis_perusahaan">Jenis
                                                                        Perusahaan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jenis_perusahaan" name="jenis_perusahaan"
                                                                        value="<?=$jenis_perusahaan?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="npwp_perusahaan">NPWP Perusahaan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="npwp_perusahaan" name="npwp_perusahaan"
                                                                        value="<?=$npwp_perusahaan?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="provinsi">Provinsi</label>
                                                                    <input type="text" class="form-control"
                                                                        id="provinsi" name="provinsi"
                                                                        value="<?=$provinsi?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kota">kota</label>
                                                                    <input type="text" class="form-control" id="kota"
                                                                        name="kota" value="<?=$kota?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <textarea class="form-control" id="alamat"
                                                                        name="alamat" rows="3"
                                                                        required><?=$alamat?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kode_pos">Kode Pos</label>
                                                                    <input type="text" class="form-control"
                                                                        id="kode_pos" name="kode_pos"
                                                                        value="<?=$kode_pos?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">deskripsi</label>
                                                                    <textarea class="form-control" id="deskripsi"
                                                                        name="deskripsi" rows="3"
                                                                        required><?=$deskripsi?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nomor_telepon">Kode Pos</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nomor_telepon" name="nomor_telepon"
                                                                        value="<?=$nomor_telepon?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="logo">Logo</label>
                                                                    <input type="file" class="form-control" id="logo"
                                                                        name="logo" required>
                                                                    <input type="text" class="form-control"
                                                                        id="logo_old" name="logo_old" value=<?=$logo?>
                                                                        hidden>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary mb-3">Submit</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Delete Data -->
                                            <div class="modal fade" id="delete_perusahaan<?=$id_user?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Data
                                                                Perusahaan
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url();?>Perusahaan/hapus_perusahaan"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id_user"
                                                                            value="<?php echo $id_user?>" />
                                                                        <input type="hidden" name="logo_old"
                                                                            value="<?=$logo?>" hidden>
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
            <!-- Modal -->
            <div class="modal fade" id="tambah_perusahaan" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Perusahaan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?=base_url();?>Perusahaan/tambah_perusahaan" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_perusahaan">Jenis
                                        Perusahaan</label>
                                    <input type="text" class="form-control" id="jenis_perusahaan"
                                        name="jenis_perusahaan" required>
                                </div>
                                <div class="form-group">
                                    <label for="npwp_perusahaan">NPWP Perusahaan</label>
                                    <input type="text" class="form-control" id="npwp_perusahaan" name="npwp_perusahaan"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                                </div>
                                <div class="form-group">
                                    <label for="kota">kota</label>
                                    <input type="text" class="form-control" id="kota" name="kota" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kode_pos">Kode Pos</label>
                                    <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                        required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="nomor_telepon">Kode Pos</label>
                                    <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo" required>

                                </div>
                                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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