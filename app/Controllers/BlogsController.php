<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogsController extends BaseController
{
    public function index()
    {
        echo view('blogs/all');
    }

    public function add()
    {
        echo view('blogs/add');
    }

    public function edit()
    {
        echo view('blogs/edit');
    }

    public function blog()
    {
        echo view('blogs/blog');
    }
}
