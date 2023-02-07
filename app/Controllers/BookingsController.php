<?php

namespace App\Controllers;

use App\Controllers\BaseController;


/**
 * Summary of BookingsController
 */
class BookingsController extends BaseController
{
    public function index()
    {
        echo view('bookings/all');
    }
    public function addBooking()
    {
        echo view('bookings/add');
    }
    public function editBooking()
    {
        echo view('bookings/edit');
    }
}
