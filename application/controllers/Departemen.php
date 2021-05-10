<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Departemen extends CI_Controller
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
            $prefix = "DEPT-";
            $getMaxNo = $this->M_master->getMaxNo('departemen');
            
            foreach($getMaxNo as $G)
            {
                $nomor = $G->kode;
            }
           
            $hari = date("d");
            $bulan = date("m");
            $tahun = date("y");

            $nourut = substr($nomor, 6, 4);
            $kodeSekarang = $nourut + 1;
            $noUrutBaru = sprintf("%04s", $kodeSekarang);
            $kodeTransaksi= $prefix.$noUrutBaru;

            $data['judul'] = 'Master Departmen';
            $data['noTransaksi'] = $kodeTransaksi;
            $data['data'] = $this->M_master->loadDept('departemen');
            $this->load->view('Include/header', $data);
            $this->load->view('Include/sidebar');
            $this->load->view('Departemen/index', $data);
            $this->load->view('Include/footer');
        }

        function insert()
        {
            $kode       = $this->input->post('kode');
            $nama       = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('nama')))));
            $ningbo     = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('ningbo')))));
            $manager    = $this->input->post('manager');
            $alias      = htmlspecialchars(htmlentities(html_escape(strtoupper($this->input->post('alias')))));

            $data = array(
                    'kode'          => $kode,
                    'nama'          => $nama,
                    'alias'         => $alias,
                    'ningbo_desc'   => $ningbo,
                    'status'        => '1',
                    'manager'       => $manager,
                    'created_date'  => date("Y-m-d H:i:s"),
                    'created_by'    => $this->session->userdata('NIK')
                );

            $insert = $this->M_crud->insert('departemen', $data);
            if($insert)
            {
                $this->session->set_flashdata('suskes', 'New Department Successfully Added');
                redirect('Departemen', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Failed to Add New Department');
                redirect('Departemen', 'refresh');
            }
        }

        function getData()
        {
            $id =  $this->input->post('dataID');
            
            $cekID = $this->M_master->cekID('departemen', $id);
            if(count($cekID) > 0)
            {
                foreach($cekID as $row)
                {
                    $kode           = $row->kode;
                    $alias          = $row->alias;
                    $nama           = $row->nama;
                    $ningbo_desc    = $row->ningbo_desc;
                    $manager        = $row->manager;
                }

                $data = array(
                    'kode'      => $kode,
                    'alias'     => $alias,
                    'nama'      => $nama,
                    'ningbo'    => $ningbo_desc,
                    'manager'   => $manager
                );

                echo json_encode($data);
            }
            else
            {
                echo "Data Not Found";
            }
        }

        function update()
        {
            $kode       = $this->input->post('kode');
            $nama       = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('nama')))));
            $ningbo     = htmlspecialchars(htmlentities(html_escape(ucwords($this->input->post('ningbo')))));
            $manager    = $this->input->post('manager');
            $alias      = htmlspecialchars(htmlentities(html_escape(strtoupper($this->input->post('alias')))));


            $data = array(
                'alias'         => $alias,
                'nama'          => $nama,
                'ningbo_desc'   => $ningbo,
                'last_update'   => date("Y-m-d H:i:s"),
                'update_by'     => $this->session->userdata('NIK')
            );

            $where = array('kode' => $kode);

            $update = $this->M_crud->update('departemen', $data,  $where);
            if($update)
            {
                $this->session->set_flashdata('suskes', 'Department Successfully Updated');
                redirect('Departemen', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Failed to Update Department');
                redirect('Departemen', 'refresh');
            }
        }

        function delete()
        {
            $id = $this->input->post('id');

            $where = array('id' => $id);
            $delete = $this->M_crud->delete('departemen', $where);
            if($delete)
            {
                $this->session->set_flashdata('suskes', 'Department Successfully Deleted');
                redirect('Departemen', 'refresh');
            }
            else
            {
                $this->session->set_flashdata('error', 'Failed to Delete Department');
                redirect('Departemen', 'refresh');
            }
        }
    }