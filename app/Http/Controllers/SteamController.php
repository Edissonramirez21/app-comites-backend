<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;

class SteamController extends Controller
{
    /**
     * Redirige al usuario a la página de autenticación de Steam.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        return Socialite::driver('steam')->redirect();
    }

    /**
     * Obtiene la información del usuario de Steam.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleCallback()
    {
        try {
            $user = Socialite::driver('steam')->user();

            return redirect()->intended('/home');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }

    /**
     */
    // protected function findOrCreateUser($steamUser)
    // {
    //     $authUser = User::where('steam_id', $steamUser->id)->first();
    //
    //     if ($authUser) {
    //         return $authUser;
    //     }
    //
    //     return User::create([
    //         'name' => $steamUser->name,
    //         'email' => $steamUser->email,
    //         'steam_id' => $steamUser->id,
    //         'avatar' => $steamUser->avatar,
    //     ]);
    // }
}
