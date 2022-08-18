<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url();?>assets/logo/pati.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WEB-A-PAKER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url();?>assets/admin_lte/dist/img/user.png" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=$this->session->userdata('username');?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=base_url();?>Dashboard/view_user" class="nav-link">

                        <i class="nav-icon fas fa-tachometer-alt text-white"></i>
                        <p class="text">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url();?>Alur_Pendaftaran/view_user_pendaftaran" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p class="text">Alur Pendaftaran</p>
                    </a>
                </li>
              
                <li class="nav-item">
                    <a href="<?=base_url();?>Daftar/view_user/<?=$this->session->userdata('id_user');?>"
                        class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p class="text">Daftar AK1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=base_url();?>Alur_Pendaftaran/view_user_perpanjangan" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p class="text">Alur Perpanjangan</p>
                    </a>
                </li>
               

                <li class="nav-item" style="<?php 
                         
                        //  $now = time(); // or your date as well
                        //  $your_date = strtotime($user_data['akhir_berlaku']);
                        //  $datediff = $your_date - $now;
                         
                        //  echo round($datediff / (60 * 60 * 24));
                        //  echo " ";

                        if($user_data['akhir_berlaku'] < date("Y-m-d") ){
                            echo '';
                        }else{
                            echo 'display:none;';
                        }

                        if($user_data['akhir_berlaku'] == NULL){
                            echo 'display:none;';
                        }
                        
                        ?>">
                    <a href="<?=base_url();?>Perpanjang/view_user/<?=$this->session->userdata('id_user');?>"
                        class="nav-link">
                        <i class="nav-icon fas fa-book"></i>

                        <p>Perpanjang</p>
                    </a>
                </li>
                <li class="nav-item" style="<?php 
                        //  echo var_dump($user['akhir_berlaku'] < date("Y-m-d"));
                        if($user_data['akhir_berlaku'] > date("Y-m-d") AND $user_data['id_status_verifikasi'] == 2  AND $user_data['id_status_perpanjangan'] == 1 AND $user_data['id_status_aktif'] == 2){
                            echo '';
                        }else{
                            echo 'display:none;';
                        }
                        
                        ?>">
                    <a href="<?=base_url();?>Cetak/kartu_kuning/<?=$this->session->userdata('id_user');?>"
                        class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-book"></i>

                        <p>Cetak Kartu AK1</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>