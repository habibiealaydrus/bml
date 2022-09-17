<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/jumbotron2');
        $this->load->view('layout/footer');
    }
}
