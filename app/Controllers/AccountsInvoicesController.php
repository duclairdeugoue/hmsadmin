<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsInvoicesController extends BaseController
{
    public function index()
    {
        echo view('accounts/invoices/all');
    }

    public function add()
    {
        echo view('accounts/invoices/add');
    }

    public function edit()
    {
        echo view('accounts/invoices/edit');
    }
    public function delete()
    {
        echo view('accounts/invoices/delete');
    }
}
