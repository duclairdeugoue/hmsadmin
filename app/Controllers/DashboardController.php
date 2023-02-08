<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        if (session()->get('user_role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        echo view('dashboard/dashboard');
    }
}
