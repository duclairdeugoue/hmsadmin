<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StaffsController extends BaseController
{
    public function index()
    {
        echo view('staffs/all');
    }

    public function addStaff()
    {
        echo view('staffs/add');
    }
    public function editStaff()
    {
        echo view('staffs/edit');
    }
}
