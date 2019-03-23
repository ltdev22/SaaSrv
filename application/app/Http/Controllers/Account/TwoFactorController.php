<?php

namespace SaaSrv\Http\Controllers\Account;

use SaaSrv\Models\Country;
use Illuminate\Http\Request;
use SaaSrv\Http\Controllers\Controller;
use SaaSrv\TwoFactor\TwoFactorInterface;
use SaaSrv\Http\Requests\TwoFactor\TwoFactorStoreRequest;
use SaaSrv\Http\Requests\TwoFactor\TwoFactorVerifyRequest;

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

    /**
     * Setup two factor.
     *
     * @param \SaaSrv\Http\Requests\TwoFactor\TwoFactorStoreRequest     $request
     * @param \SaaSrv\TwoFactor\TwoFactorInterface                      $two_factor    The two factor container (authy in this case)
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Verify two factor setup.
     *
     * @param \SaaSrv\Http\Requests\TwoFactor\TwoFactorStoreRequest     $request
     * @return \Illuminate\Http\Response
     */
    public function verify(TwoFactorVerifyRequest $request)
    {
        $request->user()->twoFactor()->update([
            'verified_at' => \Carbon\Carbon::now(),
        ]);

        return back();
    }

    /**
     * Remove two factor authentication from user's account.
     *
     * @param \Illuminate\Http\Request                  $request
     * @param \SaaSrv\TwoFactor\TwoFactorInterface      $two_factor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TwoFactorInterface $two_factor)
    {
        $user = $request->user();

        // Delete the user's tfa from out system only if its removed from Authy first
        if ($two_factor->delete($user)) {
            $user->twoFactor()->delete();
        }

        return back();
    }
}
