<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BlogsController extends BaseController
{
    public function index()
    {
        echo view('blogs/all');
    }

    public function addBlog()
    {
        echo view('blogs/add');
    }

    public function editBlog()
    {
        echo view('blogs/edit');
    }

    public function showBlog()
    {
        echo view('blogs/blog');
    }
}
