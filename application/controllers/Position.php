<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Position extends CI_Controller
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
            $data['judul'] = 'Master Position';
            $this->load->view('Include/header', $data);
            $this->load->view('Include/sidebar');
            $this->load->view('Position/index', $data);
            $this->load->view('Include/footer');
        }
    }