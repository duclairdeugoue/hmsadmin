<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Accounts extends BaseController
{
    public function expenses()
    {
        echo view('accounts/expenses');
    }

    public function invoices()
    {
        echo view('accounts/invoices');
    }

    public function payments()
    {
        echo view('accounts/payments');
    }
    public function taxes()
    {
        echo view('accounts/taxes');
    }
}
