<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index()
    {
        echo view('profile/profile');
    }

    public function edit()
    {
        echo view('profile/edit');
    }
}
