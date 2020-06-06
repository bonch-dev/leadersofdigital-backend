<?php

namespace App\Http\Controllers;

use App\User;
use App\SocialAccount;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Session;

/**
 * @group Auth
 *
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * Redirect the user to the Provider authentication page. Точка входа логинки
     * @urlParam provider required Provider, needed to auth. Подставить "vkontakte". Example: vkontakte
     * @queryParam callback_url required Url, which need to redirect after Socialite login.
     *
     * @param Request $request
     * @param string $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider(Request $request, $provider)
    {
        $callbackUrl = $request->get('callback_url');

        Session::push('callback_url', $callbackUrl);

        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the Provider. Это колбек, сюда не лезьте.
     *
     * @param $provider
     * @return Application|RedirectResponse|Redirector
     */
    public function handleProviderCallback($provider)
    {
        $user = $this->createOrGetUser(Socialite::driver($provider)->stateless()->user(), $provider);

        Auth::setUser($user);

        $token = $user->createToken('Personal Access Token')->accessToken;

        $callbackUrl = Session::pull('callback_url', 'https://leadersofdigital-fronted.server.bonch.dev/callback/')[0];

        return redirect($callbackUrl . $token);
    }

    /**
     * Create or get a user based on provider id.
     *
     * @param $providerUser
     * @param $provider
     * @return User $user
     */
    private function createOrGetUser($providerUser, $provider)
    {
        $account = SocialAccount::where('provider', $provider)
            ->where('provider_user_id', $providerUser->getId())
            ->first();

        if ($account) {
            //Return account if found
            return $account->user;
        } else {

            //Check if user with same email address exist
            $user = User::where('email', $providerUser->getEmail())->first();

            //Create user if dont'exist
            if (! $user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName()
                ]);

            }

            //Create social account
            $user->social_accounts()->create([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $provider
            ]);

            return $user;
        }
    }
}
