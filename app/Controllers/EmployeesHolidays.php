<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmployeesHolidays extends BaseController
{
    public function index()
    {
        echo view('employees/holidays/all');
    }
    
    public function edit()
    {
        echo view('employees/holidays/edit');
    }

    public function add()
    {
        echo view('employees/holidays/add');
    }

}
