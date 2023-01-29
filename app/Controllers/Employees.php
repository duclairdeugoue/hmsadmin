<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Employees extends BaseController
{
    public function list()
    {
        echo view('employees/list');
    }

    public function attendance()
    {
        echo view('employees/attendance');
    }

    public function holidays()
    {
        echo view('employees/holidays');
    }

    public function leaves()
    {
        echo view('employees/leaves');
    }
}
