<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Diperpanjang!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diubah!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_file_saya')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diubah!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_file_ijazah')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diubah!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('error_file_ktp')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diubah!",
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
                            <h1 class="m-0">Form Perpanjang</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Daftar Kartu AK1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col">
                        <?php
                                            $id = 0;
                                            foreach($user as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $no_pendaftaran = $i['no_pendaftaran']; 
                                            $nik = $i['nik']; 
                                            $nama_lengkap = $i['nama_lengkap']; 
                                            $tempat_lahir = $i['tempat_lahir']; 
                                            $tanggal_lahir = $i['tanggal_lahir']; 
                                            $agama = $i['agama']; 
                                            $tinggi_badan = $i['tinggi_badan'];
                                            $berat_badan = $i['berat_badan']; 
                                            $jurusan = $i['jurusan'];
                                            $pengalaman_kerja = $i['pengalaman_kerja'];
                                            $no_hp = $i['no_hp'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $status_perkawinan = $i['status_perkawinan'];
                                            $pendidikan_terakhir = $i['pendidikan_terakhir'];
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
                                            

                                            ?>
                        <form action="<?=base_url();?>Perpanjang/lengkapi_data_user" enctype="multipart/form-data"
                            method="POST">
                            <input type="text" value="<?=$this->session->userdata('id_user')?>" name="id_user" hidden>
                            <div class="form-group">
                                <input type="text" class="form-control" id="no_pendaftaran" name="no_pendaftaran"
                                    aria-describedby="emailHelp" value="<?=$no_pendaftaran?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="emailHelp"
                                    value="<?=$nik?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    value="<?=$nama_lengkap?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="<?=$tempat_lahir?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    value="<?=$tanggal_lahir?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin"
                                    required>
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
                                <input type="text" class="form-control" id="agama" name="agama" value="<?=$agama?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="status_perkawinan">Status Perkawinan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status_perkawinan"
                                    required>
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
                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan"
                                    value="<?=$tinggi_badan?>" required>
                            </div>
                            <div class="form-group">
                                <label for="berat_bedan">Berat Badan</label>
                                <input type="text" class="form-control" id="berat_badan" name="berat_badan"
                                    value="<?=$berat_badan?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
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
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="<?=$jurusan?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_kerja">Pengalaman Kerja</label>
                                <textarea class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" rows="3"
                                    required><?=$pengalaman_kerja?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No NP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$no_hp?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi"
                                    value="<?=$provinsi?>" required>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" value="<?=$kota?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                                    value="<?=$kode_pos?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                    required><?=$alamat?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto_saya">Foto</label>
                                <input type="file" class="form-control" id="foto_saya" name="foto_saya" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                                <input type="text" class="form-control" id="foto_saya" name="foto_saya_old"
                                    value="<?=$foto_saya?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp">Foto KTP</label>
                                <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                                <input type="text" class="form-control" id="foto_ktp" name="foto_ktp_old"
                                    value="<?=$foto_ktp?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_ijazah">Foto Ijazah</label>
                                <input type="file" class="form-control" id="foto_ijazah" name="foto_ijazah" required>
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                                <input type="text" class="form-control" id="foto_ijazah" name="foto_ijazah_old"
                                    value="<?=$foto_ijazah?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_akte">Foto Akte</label>
                                <input type="file" class="form-control" id="foto_akte" name="foto_akte">
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                                <input type="text" class="form-control" id="foto_akte" name="foto_akte_old"
                                    value="<?=$foto_akte?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_surat_pengalaman_kerja">Foto Surat Pengalaman Kerja</label>
                                <input type="file" class="form-control" id="foto_surat_pengalaman_kerja"
                                    name="foto_surat_pengalaman_kerja">
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                                <input type="text" class="form-control" id="foto_surat_pengalaman_kerja"
                                    name="foto_surat_pengalaman_kerja_old" value="<?=$foto_surat_pengalaman_kerja?>"
                                    hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_transkrip_nilai">Foto Transkrip Nilai</label>
                                <input type="file" class="form-control" id="foto_transkrip_nilai"
                                    name="foto_transkrip_nilai">
                                <small id="foto_saya" class="form-text text-muted">Format PNG/JPG/JPEG (Max 2MB)</small>
                                <input type="text" class="form-control" id="foto_transkrip_nilai"
                                    name="foto_transkrip_nilai_old" value="<?=$foto_transkrip_nilai?>" hidden>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </form>
                        <?php endforeach;?>
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