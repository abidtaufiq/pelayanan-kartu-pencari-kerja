<?php

class M_status_perpanjangan extends CI_Model
{

    public function get_all_status_perpanjangan()
    {
        $hasil = $this->db->query("SELECT * FROM status_perpanjangan");
        return $hasil;
    }

    public function update_status_perpanjangan_user($status_perpanjangan, $id_user)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET id_status_perpanjangan='$status_perpanjangan' WHERE id_user_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
}

