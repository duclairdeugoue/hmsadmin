<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;

/**
 * Summary of BookingsController
 */
class BookingsController extends BaseController
{
    public $bookingsData = [];

    public function index()
    {

        $bookingModel = new BookingModel();
        try {
            $this->bookingsData = $bookingModel->getAllBookings();
        } catch (\Throwable $th) {
            //throw $th;
        }

        $data = [
            'bookingsData'  => $this->bookingsData
        ];

        echo view('bookings/all', $data);
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
