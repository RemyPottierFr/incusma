<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function details()
    {
        $customer = Customer::find(request("id"))->load('missions');
        return view('pages.dashboard.customers.details', ['customer' => $customer]);
    }


    public function details_api(){
        $customer = Customer::find(request("id"))->load('missions');
        return response()->json($customer);
    }

    public function index_api () {
        $customers = Customer::all()->load("missions");
        return response()->json($customers);
    }

    public function linked_missions (){
        $customer = Customer::find(request("id"))->load('missions');
        return response()->json($customer);
    }
}
