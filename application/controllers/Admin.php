<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['judulhalaman'] = 'Admin Web BML';
        $this->load->view('admin/index', $data);
    }
    public function adminpage()
    {
        $data['judulhalaman'] = 'Halaman Admin Web BML';
        $data['judulaplikasi'] = 'Web Admin BML';
        $this->load->view('admin/adminpage/index', $data);
    }
}
