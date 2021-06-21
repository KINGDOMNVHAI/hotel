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
        if (Auth::check()) //Auth::check() kiểm tra đăng nhập chưa
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
        $username = $request->input('username'); //Bạn có thể lấy các dữ liệu input thông qua các thuộc tính trên lớp khởi tạo Illuminate\Http\Request.
        $password = $request->input('password'); //Bạn có thể lấy các dữ liệu input thông qua các thuộc tính trên lớp khởi tạo Illuminate\Http\Request.
        $checklogin = new LoginService;

        // Nếu đăng nhập thành công
        if (Auth::attempt(['username' => $username, 'password' => $password])) //Khi ta sử dụng Auth::attempt() nó sẽ nhận vào một mảng các giá trị , 
                                                                                //như ví dụ ở trên thì hệ thống sẽ kiểm tra xem email có trong bảng users hay không, nếu có thì trường hash password trong bảng users sẽ được lấy ra để so sánh với hash password. Và giá trị của Auth::attempt() sẽ tra về false hoặc true.
        {
            $id = Auth::id();
            $checkuser = $checklogin->checkUserRole($id); // gọi từ logínervice
            if ($checkuser->tenphanquyen == ROLE_NAME_ADMIN) //lấy từ seeder tenphanquyen
            {
                // Role admin
                return redirect()->route('list-room');
            }
            else
            {
                // Role user
                // return redirect('list-room');
                $request->session()->put('tennguoidung', $checkuser->name); //phương thức put từ phương thức session đươc trỏ thông qua thuộc tính request
                                                                            //phương thức put để lưu giá trị mới vào session
                                                                            //$request->session()->put('key', 'value');
                return redirect()->route('booking-form-fe');
            }
        }
        else
        {
            $checkuser = $checklogin->checkUserByUsername($username);

            if ($checkuser == '')
            {
                return redirect()->route('login')->with('messageWarning', __(USERNAME_IS_NOT_EXIST)); //trả về name của router kèm theo thông tin trả về
            }
            else
            {
                return redirect()->route('login')->with('messageWarning', __(WRONG_PASSWORD)); //trả về name của router kèm theo thông tin trả về
            }
        }
    }

    public function checkregister(Request $request) // kiểm tra đăng kí tài khoản chưa
    {
        $user = new UserService;
        $insert = $user->insert($request);
        return redirect('login');
    }

    //Quên mật khẩu
    public function forgotpassword()
    {
        return view('auth.pages.forgot-password', [ //dẫn đến đường link view
            'title' => TITLE_FRONTEND_INDEX,
        ]);
    }

    public function checkEmailForgotPassword(Request $request)
    {
        //check email
        $user = new UserService; // tạo một lớp lấy từ userservice
        $email = $user->checkUserByEmail($request->email);

        if ($email != null)
        {
            $to_email = $email->email; // Tới email mà người dùng đăng ký
            $password = 'JUNGKOOK0109'; //mật khẩu mới
            $email = $user->changePasswordById($email->id, $password); //lấy id của email người dùng và password mới

            Mail::to($to_email)->send(new ForgotPasswordEmail($password)); // nhận password mới

            return redirect()->route('login')->with('message', __(EMAIL_IS_SENT)); //trả về name của router kèm theo thông tin trả về
        }
        else
        {
            return redirect()->route('forgot-password')->with('message', __(EMAIL_IS_NOT_EXIST)); //trả về name của router kèm theo thông tin trả về
        }                                                                                         //Redirecting With Flashed Session Data
                                                                                                  //Named Routes
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); //thao tác này sẽ xóa thông tin xác thực khỏi phiên của người dùng để yêu cầu tiếp theo không xác thực
        $request->session()->regenerateToken(); // làm mất hiệu lực của phiên người dùng và tạo lại mã thông báo CRFS cho họ
        return redirect('login'); // trả về đường dẫn login
    }
}
