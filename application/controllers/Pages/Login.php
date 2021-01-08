<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Sign in : My Sony : Sony Indonesia';
        $this->load->view('Pages/login', $data);
    }
}
