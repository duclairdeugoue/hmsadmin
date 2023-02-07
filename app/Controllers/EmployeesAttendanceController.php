<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmployeesAttendanceController extends BaseController
{
    public function index()
    {
        echo view('employees/attendance/all');
    }
    
    public function edit()
    {
        echo view('employees/attendance/edit');
    }

    public function add()
    {
        echo view('employees/attendance/add');
    }

}
