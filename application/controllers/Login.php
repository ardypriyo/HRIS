<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model(array('M_crud', 'M_master'));
            $this->load->library('user_agent');
        }

        function index()
        {
            $this->load->view('Login');
        }

        function cekLogin()
        {
            $NIK        = htmlspecialchars(htmlentities(html_escape($this->input->post('NIK'))));
            $password   = base64_encode(htmlspecialchars(htmlentities(html_escape($this->input->post('password')))));

            $cekData = $this->M_master->cekLogin($NIK, $password);
            if(count($cekData) > 0)
            {
                foreach($cekData as $row)
                {
                    $NIK        = $row->NIK;
                    $nama       = $row->nama;
                    $status     = $row->status;
                }

                if($status == '0')
                {
                    $this->session->set_flashdata('error', 'Gagal Melakukan Login, User Anda Tidak Aktif, Silahkan Hubungi Administrator');
                    redirect('Login', 'refresh');
                }
                else
                { 
                    $dLogin = array(
                        'NIK'   => $NIK,
                        'nama'  => $nama,
                        'login' => 'login'
                    );

                    $data = array(
                            'last_login'    => date("Y-m-d  H:i:s"),
                            'login_from'    => $this->input->ip_address()
                        );
                    $where = array(
                            'NIK' => $NIK
                        );

                    $update = $this->M_crud->update('karyawan', $data, $where);
                    if($update)
                    {
                        $this->session->set_userdata($dLogin);
                        redirect('Dashboard', 'refresh');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Gagal Melakukan Login, Silahkan Hubungi Sistem Administrator');
                        redirect('Login', 'refresh');
                    }
                }
            }
            else
            {
                $this->session->set_flashdata('error', 'Kombinasi NIK dan Password Salah, Silahan Coba Lagi');
                redirect('Login', 'refresh');
            }
        }
    }