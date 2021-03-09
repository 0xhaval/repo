<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();
        
        // check for User if is exist of not, to create it
        $user = User::firstOrCreate(
            ['facebook_id' => $user->id],
            [
                'name' => $user->name,
                'email' => $user->email,
            ]
        );

        // after check automatic will be sign in
        Auth::login($user);

        return redirect('/');
    }
}
