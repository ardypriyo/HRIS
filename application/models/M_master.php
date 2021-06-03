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

        function getMaxNo($table)
        {
            $this->db->select_max('kode');
            $this->db->from($table);
            
            return $this->db->get()->result();
        }

        function loadMaster($table)
        {
            $this->db->select($table.'.*, karyawan.nama as nama_karyawan');
            $this->db->from($table);
            $this->db->join('karyawan', $table.'.manager = karyawan.NIK', 'LEFT');
            $this->db->where($table.'.status', '1');
            $this->db->order_by('kode', 'ASC');

            return $this->db->get()->result();
        }

        function cekID($table, $id)
        {
            $this->db->where('id', $id);
            $this->db->where('status', '1');

            return $this->db->get($table)->result();
        }
    }