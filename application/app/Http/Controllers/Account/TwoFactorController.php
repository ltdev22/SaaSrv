<?php

namespace SaaSrv\Http\Controllers\Account;

use SaaSrv\Models\Country;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;

class TwoFactorController extends Controller
{
    /**
     * Show the two factor page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();

        return view('account.twofactor.index', compact('countries'));
    }

    public function store(Request $request)
    {
        dd('Submits!');
    }
}
