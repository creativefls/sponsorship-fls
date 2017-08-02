<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;

class DashboardController extends Controller
{
    function show(){
        $sponsors = new Sponsor();

        return view('admin.dashboard', compact('sponsors'));
    }
}
