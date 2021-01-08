<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignIn extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Sign in : Sony';
        $this->load->view('Pages/signIn', $data);
    }
}
