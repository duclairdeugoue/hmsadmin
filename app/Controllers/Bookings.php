<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bookings extends BaseController
{
    public function all()
    {
        echo view('bookings/all');
    }
    public function add()
    {
        echo view('bookings/add');
    }
    public function edit()
    {
        echo view('bookings/edit');
    }
}
