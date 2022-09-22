<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/jumbotron');
        $this->load->view('layout/about');
        $this->load->view('layout/services');
        $this->load->view('layout/features');
        $this->load->view('layout/team');
        $this->load->view('layout/testimonial');
        $this->load->view('layout/footer');
    }
}
