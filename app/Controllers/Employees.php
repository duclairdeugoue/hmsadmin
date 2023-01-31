<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Employees extends BaseController
{
    public function index()
    {
        echo view('employees/all');
    }
    
    public function edit()
    {
        echo view('employees/edit');
    }

    public function add()
    {
        echo view('employees/add');
    }

    public function delete()
    {
        echo view('employees/delete');
    }
}
