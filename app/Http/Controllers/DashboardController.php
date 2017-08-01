<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function show(Request $request){
        return view('admin.dashboard' ,compact('request'));
    }
}
