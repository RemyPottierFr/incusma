<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customer;
use App\Models\Quote;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function customers()
    {
        $customers = Customer::all();

        return view('pages.dashboard.customer', ["customers" => $customers]);
    }

    public function bills()
    {
        $bills = Bill::all();

        return view('pages.dashboard.customer', ["bills" => $bills]);
    }

    public function quotes()
    {
        $quotes = Quote::all();

        return view('pages.dashboard.customer', ["quotes" => $quotes]);
    }
}
