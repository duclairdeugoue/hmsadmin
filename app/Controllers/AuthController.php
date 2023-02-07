<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        echo view('auth/login');
    }

    public function register()
    {
        echo view('auth/register');
    }

    public function logout()
    {
        echo view('auth/logout');
    }

    public function forgetPassword()
    {
        echo view('auth/forget_password');
    }
}
