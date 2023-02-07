<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsTaxesController extends BaseController
{
    public function index()
    {
        echo view('accounts/taxes/all');
    }

    public function add()
    {
        echo view('accounts/taxes/add');
    }

    public function edit()
    {
        echo view('accounts/taxes/edit');
    }
    public function delete()
    {
        echo view('accounts/taxes/delete');
    }
}
