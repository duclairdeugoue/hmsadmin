<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        echo view('customers/all');
    }

    public function addCustomer()
    {
        echo view('customers/add');
    }

    public function editCustomer()
    {
        echo view('customers/edit');
    }
}
