<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PricingsController extends BaseController
{
    public function index()
    {
        echo view('pricings/all');
    }

    public function addPricing()
    {
        echo view('pricings/add');
    }

    public function editPricing()
    {
        echo view('pricings/edit');
    }
}
