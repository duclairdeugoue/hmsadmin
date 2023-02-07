<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        echo view('customers/all');
    }

    public function add()
    {
        echo view('customers/add');
    }

    public function edit()
    {
        echo view('customers/edit');
    }
}
