<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmployeesLeaves extends BaseController
{
    public function index()
    {
        echo view('employees/leaves/all');
    }
    
    public function edit()
    {
        echo view('employees/leaves/edit');
    }

    public function add()
    {
        echo view('employees/leaves/add');
    }

}
