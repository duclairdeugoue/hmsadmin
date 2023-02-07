<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BookingsController extends BaseController
{
    public function index()
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
