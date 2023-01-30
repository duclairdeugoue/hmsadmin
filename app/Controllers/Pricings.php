<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pricings extends BaseController
{
    public function index()
    {
        echo view('pricings/all');
    }

    public function add()
    {
        echo view('pricings/add');
    }

    public function edit()
    {
        echo view('pricings/edit');
    }
}
