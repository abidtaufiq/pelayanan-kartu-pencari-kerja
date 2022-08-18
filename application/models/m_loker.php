<?php

class M_loker extends CI_Model
{

    public function get_all_loker()
    {
        $hasil = $this->db->query("SELECT id_loker, nama_perusahaan, judul, loker.deskripsi, posisi, jumlah_rekrut, salary, batas_akhir, logo FROM loker JOIN perusahaan_detail ON loker.id_perusahaan_details = perusahaan_detail.id_perusahaan_detail");
        return $hasil;
    }
    
    public function get_all_loker_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT id_loker, nama_perusahaan, judul, loker.deskripsi, posisi, jumlah_rekrut, salary, batas_akhir FROM loker JOIN perusahaan_detail ON loker.id_perusahaan_details = perusahaan_detail.id_perusahaan_detail WHERE id_perusahaan_details='$id_user'");
        return $hasil;
    }

    public function get_all_loker_by_id_loker($id_loker)
    {
        $hasil = $this->db->query("SELECT id_loker, nama_perusahaan, judul, loker.deskripsi, posisi, jumlah_rekrut, salary, batas_akhir, logo FROM loker JOIN perusahaan_detail ON loker.id_perusahaan_details = perusahaan_detail.id_perusahaan_detail WHERE id_loker='$id_loker'");
        return $hasil;
    }

    public function count_all_loker_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT count(id_loker) as total_loker FROM loker JOIN perusahaan_detail ON loker.id_perusahaan_details = perusahaan_detail.id_perusahaan_detail WHERE id_perusahaan_details='$id_user'");
        return $hasil;
    }


    public function insert_loker($id_loker,$id_perusahaan_details ,$judul, $deskripsi, $posisi, $jumlah_rekrut, $salary, $batas_akhir)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO loker(id_loker, id_perusahaan_details, judul, deskripsi ,posisi, jumlah_rekrut, salary, batas_akhir, created_at) 
       VALUES ('$id_loker','$id_perusahaan_details','$judul','$deskripsi','$posisi','$jumlah_rekrut','$salary','$batas_akhir',NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_loker($judul, $deskripsi, $posisi, $jumlah_rekrut, $salary, $batas_akhir, $id_loker)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE loker SET judul='$judul', deskripsi='$deskripsi', posisi='$posisi', jumlah_rekrut='$jumlah_rekrut', salary='$salary', batas_akhir='$batas_akhir' WHERE id_loker='$id_loker'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_loker($id_loker)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM loker WHERE id_loker='$id_loker'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }



}