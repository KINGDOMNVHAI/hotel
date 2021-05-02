<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Services\auth\LoginService;
use App\Services\all\UserService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.pages.login', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function register()
    {
        return view('auth.pages.register', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function checklogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return redirect('list-room');
        }
        else
        {
            $checklogin = new LoginService;
            $checkuser = $checklogin->checkUser($username);

            if ($checkuser == '')
            {
                return redirect()->route('login')->with('message', __(USERNAME_IS_NOT_EXIST));
            }
            else
            {
                return redirect()->route('login')->with('message', __(WRONG_PASSWORD));
            }
        }
    }

    public function checkregister(Request $request)
    {
        $user = new UserService;
        $insert = $user->insert($request);

        return redirect('login');

        // if (Auth::attempt(['username' => $username, 'password' => $password]))
        // {
        //     return redirect('list-post');
        // }
        // else
        // {
        //     $checklogin = new LoginService;
        //     $checkuser = $checklogin->checkUser($username);

        //     if ($checkuser == '')
        //     {
        //         return redirect()->route('login')->with('message', __(USERNAME_IS_NOT_EXIST));
        //     }
        //     else
        //     {
        //         return redirect()->route('login')->with('message', __(WRONG_PASSWORD));
        //     }
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
