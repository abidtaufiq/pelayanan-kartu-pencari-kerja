<?php

class M_user extends CI_Model
{

    public function delete_user($id_user)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM user WHERE id_user='$id_user'");
       $this->db->query("DELETE FROM user_detail WHERE id_user_detail='$id_user'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_perusahaan($id_user)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM user WHERE id_user='$id_user'");
       $this->db->query("DELETE FROM perusahaan_detail WHERE id_perusahaan_detail='$id_user'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function get_user_detail_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE  id_user='$id_user'");
        return $hasil;
    }

    public function get_all_user()
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail 
         WHERE id_user_level = 3 AND user_detail.nama_lengkap IS NOT NULL");
        return $hasil;
    }

    public function get_all_user_perpanjang()
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail 
         WHERE id_user_level = 3 AND user_detail.nama_lengkap IS NOT NULL AND user_detail.id_status_verifikasi = 1 AND user_detail.id_status_perpanjangan = 2 AND user_detail.id_status_aktif = 1");
        return $hasil;
    }

    public function get_all_user_by_date_month($start, $end)
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail 
         WHERE id_user_level = 3 AND date_registered between '$start'
        AND '$end' AND nik IS NOT NULL");
        return $hasil;
    }

    public function count_all_user()
    {
        $hasil = $this->db->query("SELECT  COUNT(id_user) as total_pencaker FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail 
         WHERE id_user_level = 3");
        return $hasil;
    }

    public function count_all_user_active()
    {
        $hasil = $this->db->query("SELECT  COUNT(id_user) as total_pencaker FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail 
         WHERE id_user_level = 3 AND id_status_aktif = 2");
        return $hasil;
    }

    public function count_all_user_no_active()
    {
        $hasil = $this->db->query("SELECT  COUNT(id_user) as total_pencaker FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail 
         WHERE id_user_level = 3 AND id_status_aktif = 1");
        return $hasil;
    }


    public function get_all_perusahaan()
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN perusahaan_detail ON user.id_user_detail = perusahaan_detail.id_perusahaan_detail 
         WHERE id_user_level = 2 AND perusahaan_detail.nama_perusahaan IS NOT NULL");
        return $hasil;
    }

    public function count_all_perusahaan()
    {
        $hasil = $this->db->query("SELECT  COUNT(id_user) as total_perusahaan  FROM user JOIN perusahaan_detail ON user.id_user_detail = perusahaan_detail.id_perusahaan_detail 
         WHERE id_user_level = 2");
        return $hasil;
    }

    public function count_all_perusahaan_active()
    {
        $hasil = $this->db->query("SELECT  COUNT(id_user) as total_perusahaan  FROM user JOIN perusahaan_detail ON user.id_user_detail = perusahaan_detail.id_perusahaan_detail 
         WHERE id_user_level = 2 AND id_status_aktif = 2");
        return $hasil;
    }

    public function count_all_perusahaan_no_active()
    {
        $hasil = $this->db->query("SELECT  COUNT(id_user) as total_perusahaan  FROM user JOIN perusahaan_detail ON user.id_user_detail = perusahaan_detail.id_perusahaan_detail 
         WHERE id_user_level = 2 AND id_status_aktif = 1");
        return $hasil;
    }

    public function get_all_perusahaan_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT * FROM user JOIN perusahaan_detail ON user.id_user_detail = perusahaan_detail.id_perusahaan_detail 
         WHERE id_user_level = 2 AND id_perusahaan_detail='$id_user'");
        return $hasil;
    }

    public function pendaftaran_user($id, $username, $email, $password,  $id_user_level, $id_status_verifikasi, $id_status_aktif, $id_status_perpanjangan)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi, id_status_aktif, id_status_perpanjangan, date_registered) VALUES ('$id','$id_status_verifikasi','$id_status_aktif','$id_status_perpanjangan', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function insert_user($id ,$username, $password, $email, $no_pendaftaran, $nik, $nama_lengkap, $tempat_lahir,
    $tanggal_lahir, $jenis_kelamin, $agama, $status_perkawinan, $tinggi_badan, $berat_badan, 
    $pendidikan_terakhir, $jurusan, $pengalaman_kerja, $no_hp, $provinsi, $kota, $kode_pos, 
    $alamat, $foto_saya, $foto_ktp, $foto_ijazah, $foto_akte, $foto_surat_pengalaman_kerja, $foto_transkrip_nilai, $id_status_verifikasi, $id_status_perpanjangan, $id_status_aktif, $id_user_level)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, no_pendaftaran, nik, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, 
       agama, status_perkawinan, tinggi_badan, berat_badan, pendidikan_terakhir, 
       jurusan, pengalaman_kerja, no_hp, provinsi, kota, kode_pos, alamat, foto_saya, foto_ktp, foto_ijazah, foto_akte, foto_surat_pengalaman_kerja, foto_transkrip_nilai, id_status_verifikasi, id_status_aktif, id_status_perpanjangan, date_registered) 
       VALUES ('$id','$no_pendaftaran','$nik','$nama_lengkap','$tempat_lahir','$tanggal_lahir',
       '$jenis_kelamin','$agama','$status_perkawinan','$tinggi_badan','$berat_badan','$pendidikan_terakhir',
       '$jurusan','$pengalaman_kerja','$no_hp','$provinsi','$kota','$kode_pos','$alamat',
       '$foto_saya','$foto_ktp','$foto_ijazah',
       '$foto_akte','$foto_surat_pengalaman_kerja','$foto_transkrip_nilai','$id_status_verifikasi','$id_status_aktif','$id_status_perpanjangan', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function pendaftaran_perusahaan($id, $username, $email, $password,  $id_user_level, $id_status_verifikasi, $id_status_aktif)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO perusahaan_detail(id_perusahaan_detail, id_status_verifikasi, id_status_aktif, date_registered) VALUES ('$id','$id_status_verifikasi','$id_status_aktif', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function cek_login($username)
    {
        
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username'");
        return $hasil;
        
    }

    public function update_account($id_user, $username, $password)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', password='$password' WHERE id_user='$id_user'");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_user_detail($id_user, $no_pendaftaran, $nik, $nama_lengkap, 
    $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $status_perkawinan,
     $tinggi_badan, $berat_badan, 
    $pendidikan_terakhir, $jurusan, $pengalaman_kerja, $no_hp, $provinsi, $kota, 
    $kode_pos, $alamat, $foto_saya, $foto_ktp, $foto_ijazah, $foto_akte, $foto_surat_pengalaman_kerja, $foto_transkrip_nilai, $id_status_verifikasi, $id_status_perpanjangan, $id_status_aktif )
    {

        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET no_pendaftaran='$no_pendaftaran', nik='$nik', nama_lengkap='$nama_lengkap', 
        tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', 
        status_perkawinan='$status_perkawinan', tinggi_badan='$tinggi_badan', berat_badan='$berat_badan', 
        pendidikan_terakhir='$pendidikan_terakhir', jurusan='$jurusan', pengalaman_kerja='$pengalaman_kerja', no_hp='$no_hp', provinsi='$provinsi', kota='$kota',
        kode_pos='$kode_pos', alamat='$alamat', foto_saya='$foto_saya', foto_ktp='$foto_ktp', foto_ijazah='$foto_ijazah', foto_akte='$foto_akte' , foto_surat_pengalaman_kerja='$foto_surat_pengalaman_kerja'  , foto_transkrip_nilai='$foto_transkrip_nilai', id_status_verifikasi='$id_status_verifikasi' 
        , id_status_perpanjangan='$id_status_perpanjangan', id_status_aktif='$id_status_aktif' 
         WHERE id_user_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;

    }

    public function update_perusahaan_detail($id_user, $nama_perusahaan, 
    $jenis_perusahaan, $npwp_perusahaan, $provinsi, $kota, $alamat, $kode_pos, $deskripsi, $nomor_telepon, $logo)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE perusahaan_detail SET nama_perusahaan='$nama_perusahaan', jenis_perusahaan='$jenis_perusahaan', 
        npwp_perusahaan='$npwp_perusahaan', provinsi='$provinsi', kota='$kota', alamat='$alamat', kode_pos='$kode_pos', deskripsi='$deskripsi',
        nomor_telepon='$nomor_telepon',
        logo='$logo'WHERE id_perusahaan_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_perusahaan($id_user, $nama_perusahaan, 
    $jenis_perusahaan, $npwp_perusahaan, $provinsi, $kota, $alamat, $kode_pos, $deskripsi, $nomor_telepon, $logo)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE perusahaan_detail SET nama_perusahaan='$nama_perusahaan', jenis_perusahaan='$jenis_perusahaan', 
        npwp_perusahaan='$npwp_perusahaan', provinsi='$provinsi', kota='$kota', alamat='$alamat', kode_pos='$kode_pos', deskripsi='$deskripsi',
        nomor_telepon='$nomor_telepon',
        logo='$logo'WHERE id_perusahaan_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function insert_perusahaan($id, $username, $password, $email, $nama_perusahaan, 
    $jenis_perusahaan, $npwp_perusahaan, $provinsi, $kota, $alamat, $kode_pos, $deskripsi, $nomor_telepon, $logo, $id_status_aktif, $id_status_verifikasi, $id_user_level)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
        $this->db->query("INSERT INTO perusahaan_detail(id_perusahaan_detail, nama_perusahaan, jenis_perusahaan,
        npwp_perusahaan, provinsi, kota, alamat, kode_pos, deskripsi, nomor_telepon, logo, id_status_verifikasi, 
        id_status_aktif, date_registered) VALUES ('$id','$nama_perusahaan','$jenis_perusahaan','$npwp_perusahaan','$provinsi',
        '$kota','$alamat','$kode_pos','$deskripsi','$nomor_telepon','$logo',
        '$id_status_verifikasi','$id_status_aktif', NOW())");
       

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

   


}