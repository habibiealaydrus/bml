<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/jumbotron');
        $this->load->view('layout/about');
        $this->load->view('layout/quote');
        $this->load->view('layout/services');
        $this->load->view('layout/features');
        $this->load->view('layout/pricingplan');
        $this->load->view('layout/team');
        $this->load->view('layout/testimonial');
        $this->load->view('layout/blog');
        $this->load->view('layout/footer');
    }
}
