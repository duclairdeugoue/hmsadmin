<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RoomsController extends BaseController
{
    public function index()
    {
        echo view('rooms/all');
    }

    public function addRoom()
    {
        echo view('rooms/add');
    }

    public function editRoom()
    {
        echo view('rooms/edit');
    }
}
