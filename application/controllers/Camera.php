<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Camera extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Camera_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Cameras | Buy Photography Cameras & Lenses | Sony ID';
        $data['camera'] = $this->Camera_model->getAllCamera();
        if ($this->input->post('keyword')) {
            $data['camera'] = $this->Camera_model->searchDataCamera();
        }
        $this->load->view('Camera/index', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Form Insert Data Camera';

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Camera/tambah', $data);
        } else {
            $this->Camera_model->insertDataCamera();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Camera');
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Edit Data Camera';
        $data['camera'] = $this->Camera_model->getCameraById($id);
        $data['tipe'] = ['Interchangeable-lens Cameras', 'Lenses', 'Compact Cameras', 'Professional Video Cameras', 'Cinema Line Cameras', 'Accessories'];

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Camera/edit', $data);
        } else {
            $this->Camera_model->editDataCamera();
            $this->session->set_flashdata('flash', 'Diedit');
            redirect('Camera');
        }
    }

    public function hapus($id)
    {
        $this->Camera_model->deleteDataCamera($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Camera');
    }
}
