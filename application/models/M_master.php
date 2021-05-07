<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_master extends CI_Model
    {
        function cekLogin($NIK, $password)
        {
            $this->db->select('*');
            $this->db->from('karyawan');
            $this->db->where('NIK', $NIK);
            $this->db->where('password', $password);

            return $this->db->get()->result();
        }
    }