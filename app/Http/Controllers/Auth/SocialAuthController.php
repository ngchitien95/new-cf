<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Http\Request;
// use Laravel\Socialite\Facades\Socialite;
use App\Socialite;

class SocialAuthController extends Controller
{
    public function redirect($social){
        return Socialite::driver($social)->redirect();
    }

    public function callback($social){

        $user = SocialAccountService::createOrGetUesr(Socialite::driver($social)->user(), $social);

    }
}
