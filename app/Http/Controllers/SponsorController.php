<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    public function wizardSponsor()
    {
        return view('wizard.register');
    }

    function formSponsorship(Request $request){
        $sponsor = new Sponsor();

        $sponsor->type_sponsorship  = $request->sponsorship_types;
        $sponsor->company_name      = $request->company;
        $sponsor->pic               = $request->pic;
        $sponsor->phone             = $request->phone;
        $sponsor->email             = $request->email;
        $sponsor->address           = $request->address;
        $sponsor->explanation       = $request->explanation;

        $sponsor->save();

        return view('wizard.thankyou', ['sponsor' => $sponsor]);
	}
}
