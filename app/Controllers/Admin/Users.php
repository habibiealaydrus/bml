<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function login()
    {
        return view('Layout/Login');
        // echo "Hello World!";
    }

    public function forgotpassword()
    {
        return view('Layout/ForgotPassword');
        // echo "Hello World!";
    }
}
