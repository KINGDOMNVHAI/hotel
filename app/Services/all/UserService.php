<?php
namespace App\Services\all;

use App\Model\User;
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

        $query = User::insert([
            'name' => $name,
            'username'  => $username,
            'password'  => Hash::make($password),
            'email'     => $email,
        ]);

        return $query;
    }
}
