<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Rooms extends BaseController
{
    public function index()
    {
        echo view('rooms/all');
    }

    public function add()
    {
        echo view('rooms/add');
    }

    public function edit()
    {
        echo view('rooms/edit');
    }
}
