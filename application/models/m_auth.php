<?php
class M_auth extends CI_Model
{
    public function login($where)
    {
        return $this->db->get_where('users', $where);
    }
}