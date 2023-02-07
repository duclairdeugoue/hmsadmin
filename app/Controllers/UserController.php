<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        echo view('profile/profile');
    }

    public function editProfile()
    {
        echo view('profile/edit');
    }

}
