<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<?php if ($this->session->flashdata('input')) { ?>
		<script>
			swal({
				title: "Success!",
				text: "Data Berhasil Diubah!",
				icon: "success"
			});
		</script>
	<?php } ?>

	<?php if ($this->session->flashdata('eror_input')) { ?>
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
			<img class="animation__shake" src="<?= base_url(); ?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo" height="60" width="60">
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
							<h1 class="m-0">Dashboard</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard v1</li>
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
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-primary">
								<div class="inner">
									<h3><?= $pencaker['total_pencaker']; ?></h3>

									<p>Data Pencaker</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-stalker"></i>
								</div>
								<a href="<?= base_url(); ?>Pencaker/view_perusahaan" class="small-box-footer">More info
									<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info">
								<div class="inner">
									<h3><?= $pencaker_acitve['total_pencaker']; ?></h3>

									<p>Data Pencaker Aktif</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-stalker"></i>
								</div>
								<a href="<?= base_url(); ?>Pencaker/view_perusahaan" class="small-box-footer">More info
									<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->

						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?= $pencaker_no_active['total_pencaker']; ?></h3>

									<p>Data Pencaker Non Aktif</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-stalker"></i>
								</div>
								<a href="<?= base_url(); ?>Pencaker/view_perusahaan" class="small-box-footer">More
									info
									<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-success">
								<div class="inner">
									<h3><?= $perusahaan['total_perusahaan']; ?></h3>

									<p>Data Perusahaan</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="<?= base_url(); ?>Perusahaan/view_admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-info">
								<div class="inner">
									<h3><?= $perusahaan_active['total_perusahaan']; ?></h3>

									<p>Data Perusahaan Aktif</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="<?= base_url(); ?>Perusahaan/view_admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-6">
							<!-- small box -->
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?= $perusahaan_no_active['total_perusahaan']; ?></h3>

									<p>Data Perusahaan Non Aktif</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="<?= base_url(); ?>Perusahaan/view_admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->

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

	<?php $this->load->view("admin/components/js.php") ?>
</body>

</html>
