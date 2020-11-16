<?php

namespace App\Http\Controllers;

use App\Models\Mission;

class MissionController extends Controller
{
    public function index_api()
    {
        $mission = Mission::where("customer_id", request("id"))->firstOr(function () {
            return [];
        });

        if (count($mission)) {
            return response()->json($mission);
        } else {
            return response()->json("{}");
        }
    }
}
