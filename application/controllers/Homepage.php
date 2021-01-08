<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Sony Indonesia | Latest Technology & News | Electronics | Entertainment';
        $this->load->view('Home/homepage', $data);
    }
}
