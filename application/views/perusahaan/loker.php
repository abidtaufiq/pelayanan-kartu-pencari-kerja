<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("perusahaan/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Ditambahakan!",
        text: "Data Berhasil Ditambahakan!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Data gagal Ditambahakan!",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Berhasil Diedit!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Data gagal Diedit!",
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
    <?php if ($this->session->flashdata('eror_delete')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Data gagal Dihapus!",
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
                            <h1 class="m-0">Data Loker</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Loker</li>
                            </ol>
                        </div><!-- /.col -->
                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                            data-target="#tambah_loker">
                            Tambah Loker
                        </button>
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
                                    <h3 class="card-title">Table Data Loker</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Posisi</th>
                                                <th>Jumlah Rekrut</th>
                                                <th>Salary</th>
                                                <th>Batas Akhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $id = 0;
                                            foreach($loker as $i)
                                            :
                                            $id++;
                                            $id_loker = $i['id_loker'];
                                            $id_loker = $i['id_loker'];
                                            $nama_perusahaan = $i['nama_perusahaan'];
                                            $judul = $i['judul'];
                                            $deskripsi_loker = $i['deskripsi'];
                                            $posisi = $i['posisi'];
                                            $jumlah_rekrut = $i['jumlah_rekrut'];
                                            $salary = $i['salary'];
                                            $batas_akhir = $i['batas_akhir'];

                                            
                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$nama_perusahaan?></td>
                                                <td><?=$judul?></td>
                                                <td><?=$deskripsi_loker?></td>
                                                <td><?=$posisi?></td>
                                                <td><?=$jumlah_rekrut?></td>
                                                <td><?=$salary?></td>
                                                <td><?=$batas_akhir?></td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#ubah_loker<?=$id_loker?>">
                                                                Edit <i class="nav-icon fas fa-edit"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#delete_loker<?=$id_loker?>"
                                                                class="btn btn-danger">Hapus <i
                                                                    class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Tambah-->
                                            <div class="modal fade" id="ubah_loker<?=$id_loker?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Loker
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>Loker/edit_loker"
                                                                method="POST">
                                                                <input type="text" value="<?=$id_loker?>"
                                                                    name="id_loker" hidden>
                                                                <div class="form-group">
                                                                    <label for="judul">Judul</label>
                                                                    <input type="text" class="form-control" id="judul"
                                                                        name="judul" value="<?=$judul?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Deskripsi</label>
                                                                    <input type="text" class="form-control"
                                                                        id="deskripsi" name="deskripsi"
                                                                        value="<?=$deskripsi_loker?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="posisi">Posisi</label>
                                                                    <input type="text" class="form-control" id="posisi"
                                                                        name="posisi" value="<?=$posisi?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jumlah_rekrut">Jumlah Rekrut</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jumlah_rekrut" name="jumlah_rekrut"
                                                                        value="<?=$jumlah_rekrut?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="salary">Salary</label>
                                                                    <input type="text" class="form-control" id="salary"
                                                                        name="salary" value="<?=$salary?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="batas_akhir">Batas Akhir</label>
                                                                    <input type="date" class="form-control"
                                                                        id="batas_akhir" name="batas_akhir"
                                                                        value="<?=$batas_akhir?>" required>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Delete Data -->
                                            <div class="modal fade" id="delete_loker<?=$id_loker?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Data
                                                                Loker
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= base_url();?>Loker/hapus_loker"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id_loker"
                                                                            value="<?php echo $id_loker?>" />
                                                                       
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
        </div>
        <!-- /.content-wrapper -->

        <!-- Modal Tambah-->
        <div class="modal fade" id="tambah_loker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Loker</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url();?>Loker/tambah_loker" method="POST">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label for="posisi">Posisi</label>
                                <input type="text" class="form-control" id="posisi" name="posisi" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_rekrut">Jumlah Rekrut</label>
                                <input type="text" class="form-control" id="jumlah_rekrut" name="jumlah_rekrut"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input type="text" class="form-control" id="salary" name="salary" required>
                            </div>
                            <div class="form-group">
                                <label for="batas_akhir">Batas Akhir</label>
                                <input type="date" class="form-control" id="batas_akhir" name="batas_akhir" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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