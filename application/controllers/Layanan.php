<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/jumbotron3');
        $this->load->view('layout/services');
        $this->load->view('layout/footer');
    }
}