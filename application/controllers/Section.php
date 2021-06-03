<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Section extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            if($this->session->userdata('login') !== 'login')
            {
                redirect('Login', 'refresh');
            }
            else
            {
                $this->load->model(array('M_crud', 'M_master'));
                $this->load->library('user_agent');
            }
        }

        function index()
        {
            $prefix = "SEC-";
            $getMaxNo = $this->M_master->getMaxNo('section');
            
            foreach($getMaxNo as $G)
            {
                $nomor = $G->kode;
            }
           
            // $hari = date("d");
            // $bulan = date("m");
            // $tahun = date("y");

            $nourut = substr($nomor, 6, 4);
            $kodeSekarang = $nourut + 1;
            $noUrutBaru = sprintf("%04s", $kodeSekarang);
            $kodeTransaksi= $prefix.$noUrutBaru;

            $data['noTransaksi'] = $kodeTransaksi;
            $data['data'] = $this->M_master->loadMaster('section');

            $data['judul'] = 'Master Section';
            $this->load->view('Include/header', $data);
            $this->load->view('Include/sidebar');
            $this->load->view('Section/index', $data);
            $this->load->view('Include/footer');
        }
    }