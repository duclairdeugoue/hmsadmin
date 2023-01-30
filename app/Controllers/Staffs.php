<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Staffs extends BaseController
{
    public function index()
    {
        echo view('staffs/all');
    }

    public function add()
    {
        echo view('staffs/add');
    }
    public function edit()
    {
        echo view('staffs/edit');
    }
}
