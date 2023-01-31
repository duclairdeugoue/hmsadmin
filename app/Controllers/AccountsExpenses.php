<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsExpenses extends BaseController
{
    public function index()
    {
        echo view('accounts/expenses/all');
    }

    public function add()
    {
        echo view('accounts/expenses/add');
    }

    public function edit()
    {
        echo view('accounts/expenses/edit');
    }
    public function delete()
    {
        echo view('accounts/expenses/delete');
    }
}
