<?php

namespace App\Http\Controllers;

use App\Models\Mission;

class MissionController extends Controller
{
    public function index_api()
    {
        $mission = Mission::find(request("id"))->load('quotes')->load('bills');
        return response()->json($mission);
    }
}
