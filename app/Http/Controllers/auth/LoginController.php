<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\FirstEmail;
use App\Mail\ForgotPasswordEmail;
use App\Services\auth\LoginService;
use App\Services\all\UserService;
use App\Services\frontend\feHotel\RoomService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check())
        {
            return redirect('list-room');
        }
        else
        {
            return view('auth.pages.login', [
                'title' => TITLE_FRONTEND_INDEX,
            ]);
        }
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
        $checklogin = new LoginService;

        // Nếu đăng nhập thành công
        if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            $id = Auth::id();
            $checkuser = $checklogin->checkUserRole($id);
            if ($checkuser->tenphanquyen == ROLE_NAME_ADMIN)
            {
                // Role admin
                return redirect()->route('list-room');
            }
            else
            {
                // Role user
                // return redirect('list-room');
                $request->session()->put('tennguoidung', $checkuser->name);
                return redirect()->route('booking-form-fe');
            }
        }
        else
        {
            $checkuser = $checklogin->checkUserByUsername($username);

            if ($checkuser == '')
            {
                return redirect()->route('login')->with('messageWarning', __(USERNAME_IS_NOT_EXIST));
            }
            else
            {
                return redirect()->route('login')->with('messageWarning', __(WRONG_PASSWORD));
            }
        }
    }

    public function checkregister(Request $request)
    {
        $user = new UserService;
        $insert = $user->insert($request);
        return redirect('login');
    }

    public function forgotpassword()
    {
        return view('auth.pages.forgot-password', [
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function checkEmailForgotPassword(Request $request)
    {
        //check email
        $user = new UserService;
        $email = $user->checkUserByEmail($request->email);

        if ($email != null)
        {
            $to_email = $email->email;
            $password = 'AXBYCZ123';
            $email = $user->changePasswordById($email->id, $password);

            Mail::to($to_email)->send(new ForgotPasswordEmail($password));
            return redirect()->route('login')->with('message', __(EMAIL_IS_SENT));
        }
        else
        {
            return redirect()->route('forgot-password')->with('message', __(EMAIL_IS_NOT_EXIST));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
