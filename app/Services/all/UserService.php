<?php
namespace App\Services\all;

use App\Model\User;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     *
     *
     * @return void
     */
    public function insert($request)
    {
        $name = $request->lastname . $request->firstname;
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;

        $query = User::insert([
            'name' => $name,
            'username'  => $username,
            'password'  => Hash::make($password),
            'email'     => $email,
            'phone'     => $phone,
            'role'      => ROLE_ID_MEMBER,
        ]);

        return $query;
    }

    public function checkUserByEmail($email)
    {
        $query = User::where('email', $email)->first();
        return $query;
    }

    public function changePasswordById($id, $password)
    {
        $query = DB::table('users')
            ->where('id', '=', $id)
            ->update([
                'password' => bcrypt($password),
            ]);

        return $query;
    }
}
