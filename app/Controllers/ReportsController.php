<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportsController extends BaseController
{
    public function expenses()
    {
        echo view('reports/expenses');
    }

    public function invoices()
    {
        echo view('reports/invoices');
    }
}
