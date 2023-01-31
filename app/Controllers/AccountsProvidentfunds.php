<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsProvidentfunds extends BaseController
{
    public function index()
    {
        echo view('accounts/provident_funds/all');
    }

    public function add()
    {
        echo view('accounts/provident_funds/add');
    }

    public function edit()
    {
        echo view('accounts/provident_funds/edit');
    }
    public function delete()
    {
        echo view('accounts/provident_funds/delete');
    }
}
