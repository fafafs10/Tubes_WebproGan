<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Sign up : My Sony : Sony Indonesia';
        $this->load->view('Pages/register', $data);
    }
}
