<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;

class DashboardController extends Controller
{
    function show(){
        $all_sponsors = Sponsor::all()->count();
        $fresh_money_sponsors = Sponsor::where('type_sponsorship', '1')->count();
        $in_kind_sponsors = Sponsor::where('type_sponsorship', '2')->count();
        $medpar_sponsors = Sponsor::where('type_sponsorship', '3')->count();

        return view('admin.dashboard', compact(
            'all_sponsors',
            'fresh_money_sponsors',
            'in_kind_sponsors',
            'medpar_sponsors'
        ));
    }
}
