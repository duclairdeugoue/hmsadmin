<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmployeesController extends BaseController
{
    public function index()
    {
        echo view('employees/all');
    }
    
    public function editEmployee()
    {
        echo view('employees/edit');
    }

    public function addEmployee()
    {
        echo view('employees/add');
    }

    public function deleteEmployee()
    {
        echo view('employees/delete');
    }

    public function viewAttendances()
    {
        echo view('employees/attendance/all');
    }
    
    public function editAttendance()
    {
        echo view('employees/attendance/edit');
    }

    public function addAttendance()
    {
        echo view('employees/attendance/add');
    }

    public function viewHolidays()
    {
        echo view('employees/holidays/all');
    }
    
    public function editHolidays()
    {
        echo view('employees/holidays/edit');
    }

    public function addHolidays()
    {
        echo view('employees/holidays/add');
    }

    public function viewLeaves()
    {
        echo view('employees/leaves/all');
    }
    
    public function editLeave()
    {
        echo view('employees/leaves/edit');
    }

    public function addLeave()
    {
        echo view('employees/leaves/add');
    }

    
}
