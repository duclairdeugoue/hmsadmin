<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AccountsController extends BaseController
{
    // Expenses

    public function viewExpenses()
    {
        echo view('accounts/expenses/all');
    }

    public function addExpense()
    {
        echo view('accounts/expenses/add');
    }

    public function editExpense()
    {
        echo view('accounts/expenses/edit');
    }
    public function deleteExpense()
    {
        echo view('accounts/expenses/delete');
    }

    // Invoices

    public function viewInvoices()
    {
        echo view('accounts/invoices/all');
    }

    public function addInvoice()
    {
        echo view('accounts/invoices/add');
    }

    public function editInvoice()
    {
        echo view('accounts/invoices/edit');
    }
    public function deleteInvoice()
    {
        echo view('accounts/invoices/delete');
    }

    // Payments

    public function viewPayments()
    {
        echo view('accounts/payments/all');
    }

    public function addPayment()
    {
        echo view('accounts/payments/add');
    }

    public function editPayment()
    {
        echo view('accounts/payments/edit');
    }
    public function deletePayment()
    {
        echo view('accounts/payments/delete');
    }

    // Taxes

    public function viewTaxes()
    {
        echo view('accounts/taxes/all');
    }

    public function addTax()
    {
        echo view('accounts/taxes/add');
    }

    public function editTax()
    {
        echo view('accounts/taxes/edit');
    }
    public function deleteTax()
    {
        echo view('accounts/taxes/delete');
    }

    // Provident Funds

    public function viewProvidentfunds()
    {
        echo view('accounts/provident_funds/all');
    }

    public function addProvidentfund()
    {
        echo view('accounts/provident_funds/add');
    }

    public function editProvidentfund()
    {
        echo view('accounts/provident_funds/edit');
    }
    public function deleteProvidentfund()
    {
        echo view('accounts/provident_funds/delete');
    }
}
