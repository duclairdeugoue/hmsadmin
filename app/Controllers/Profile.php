<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        echo view('profile/profile');
    }
}
