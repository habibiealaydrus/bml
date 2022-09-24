<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Layanan';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron3');
        $this->load->view('layout/services');
        $this->load->view('layout/footer');
    }
    public function export()
    {
        $data['judul'] = 'Perizinan Export Import';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron3');
        $this->load->view('layout/export');
        $this->load->view('layout/footer');
    }
    public function bpom()
    {
        $data['judul'] = 'Perizinan BPOM';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron3');
        $this->load->view('layout/bpom');
        $this->load->view('layout/footer');
    }
    public function halal()
    {
        $data['judul'] = 'Perizinan Halal';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron3');
        $this->load->view('layout/halal');
        $this->load->view('layout/footer');
    }
    public function lainnya()
    {
        $data['judul'] = 'Perizinan Lain';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron3');
        $this->load->view('layout/lainnya');
        $this->load->view('layout/footer');
    }
}
