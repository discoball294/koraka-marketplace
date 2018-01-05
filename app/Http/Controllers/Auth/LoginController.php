<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    public function redirectTo()
    {
        if (\Auth::check()) {
            $auth = \Auth::user()->roles()->first();
            switch ($auth->name) {
                case 'Admin':
                    return 'admin';
                    break;
                case 'User':
                    return '/';
                    break;
                default:
                    return '/';
                    break;
            }
        }
        return '/';
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
