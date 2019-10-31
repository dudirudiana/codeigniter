<?php
class M_Profile extends CI_Model
{
    public function getdata_profile()
    {
        return $this->db->get('profile')->result_array();
    }
}
