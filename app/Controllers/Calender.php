<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Calender extends BaseController
{
    public function index()
    {
        echo view('calender/calender');
    }
}
