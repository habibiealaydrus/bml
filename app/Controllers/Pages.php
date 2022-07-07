<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('Layout/Header');
        echo view('Layout/About');
        echo view('Layout/Footer');
        // return view('Layout/Header');
        // echo "Hello World!";
    }
}
