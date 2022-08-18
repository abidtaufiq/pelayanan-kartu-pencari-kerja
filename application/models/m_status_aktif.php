<?php

class M_status_aktif extends CI_Model
{

    public function get_all_status_aktif()
    {
        $hasil = $this->db->query("SELECT * FROM status_aktif");
        return $hasil;
    }


    public function update_status_aktif_user($status_aktif, $id_user, $mulai_berlaku, $akhir_berlaku, $id_status_perpanjangan)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET id_status_aktif='$status_aktif', mulai_berlaku='$mulai_berlaku', akhir_berlaku='$akhir_berlaku',id_status_perpanjangan='$id_status_perpanjangan' WHERE id_user_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_status_aktif_perusahaan($status_aktif, $id_perusahaan_details)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE perusahaan_detail SET id_status_aktif='$status_aktif' WHERE id_perusahaan_detail='$id_perusahaan_details'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}


