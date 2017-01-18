<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends Controller
{
    public function index()
    {
        $data = [];
        $data['activities'] = Activity::all();

        return view('log', $data);
    }
}
