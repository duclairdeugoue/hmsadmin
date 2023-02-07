<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StaffsController extends BaseController
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
