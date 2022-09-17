<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/jumbotron2');
        $this->load->view('layout/about');
        $this->load->view('layout/services');
        $this->load->view('layout/gallery');
        $this->load->view('layout/footer');
    }
}
