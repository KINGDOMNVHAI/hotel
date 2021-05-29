<?php
namespace App\Services\auth;

use App\Model\User;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginService extends ServiceProvider
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
    public function checkUserByUsername($username)
    {
        $query = User::where('username', $username)->first();
        return $query;
    }

    public function checkUserByUserId($id)
    {
        $query = User::where('id', $id)->first();
        return $query;
    }

    public function checkUserRole($id)
    {
        $query = DB::table('users')
        ->join('phanquyen', 'users.role', '=', 'phanquyen.idphanquyen')
        ->select(
            'phanquyen.idphanquyen',
            'phanquyen.tenphanquyen',
            'users.id',
            'users.role'
        )
        ->where('users.id', '=', $id)
        ->first();

        return $query;
    }
}
