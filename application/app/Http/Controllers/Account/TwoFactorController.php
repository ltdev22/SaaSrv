<?php

namespace SaaSrv\Http\Controllers\Account;

use SaaSrv\Models\Country;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\TwoFactor\TwoFactorInterface;
use SaaSrv\Http\Requests\TwoFactor\TwoFactorStoreRequest;

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

    public function store(TwoFactorStoreRequest $request, TwoFactorInterface $two_factor)
    {
        $user = $request->user();

        // First we need to store the user record in our database
        $user->TwoFactor()->create([
            'phone' => $request->phone,
            'dial_code' => $request->dial_code,
        ]);

        // Then update the identifier if the response to the TF was successfull
        if ($response = $two_factor->register($user)) {
            $user->TwoFactor()->update([
                'identifier' => $response->user->id,
            ]);
        }

        return back();
    }

    public function verify(Request $request)
    {
        dd('Verify!');
    }
}
