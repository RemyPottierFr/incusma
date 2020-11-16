<?php

namespace App\Http\Controllers;

use App\Models\Bill;

class BillController extends Controller
{
    public function index_api()
    {
        return Bill::all();
    }

    public function linked_bills_api()
    {
        return Bill::where(["mission_id" => request('id')]);
    }
}
