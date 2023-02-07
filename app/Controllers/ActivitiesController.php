<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ActivitiesController extends BaseController
{
    public function index()
    {
        echo view('activities/activities');
    }
}
