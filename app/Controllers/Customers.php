<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customers extends BaseController
{
    public function all()
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
