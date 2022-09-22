<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kontak';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron4');
        $this->load->view('layout/map');
        $this->load->view('layout/footer');
    }
}
