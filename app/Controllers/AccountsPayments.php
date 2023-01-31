<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsPayments extends BaseController
{
   public function index()
    {
        echo view('accounts/payments/all');
    }

    public function add()
    {
        echo view('accounts/payments/add');
    }

    public function edit()
    {
        echo view('accounts/payments/edit');
    }
    public function delete()
    {
        echo view('accounts/payments/delete');
    }
}
