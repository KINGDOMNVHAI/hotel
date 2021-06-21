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
    public function checkUserByUsername($username) // kiem tra nguoi dung bang username
    {
        $query = User::where('username', $username)->first(); // làm nút tìm kiếm có 100 kết quả, mình chỉ lấy cái đầu tiên thôi
                                                              //SELECT * FROM user WHERE 'username' = 'thu' LIMIT 0,1
                                                              //lấy về một bản ghi đầu tiên trong 1 model trả về

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
        ->join('phanquyen', 'users.role', '=', 'phanquyen.idphanquyen') //Join table trong database.
        ->select(
            'phanquyen.idphanquyen',
            'phanquyen.tenphanquyen',
            'users.id',
            'users.name',
            'users.role'
        )
        ->where('users.id', '=', $id)
        ->first(); //lấy ra một dòng dữ liệu các bạn có thể sử dụng
                   //Phương thức này sẽ limit kết quả trả về của query, 
                   //phương thức này sẽ trả về một PHP stdClass nếu có dữ liệu trả về 
                   //và nếu như không có kết quả nào trả về thì nó sẽ là null. 

        return $query;

        //SELECT `users`.`id`, `users`.`name`, `users`.`role`, `phanquyen`.`idphanquyen`, `phanquyen`.`tenphanquyen`
        // FROM `users`
        // JOIN `phanquyen` ON users.role = phanquyen.idphanquyen
        // WHERE `users`.`id` = 2
        // LIMIT 0,1
    }
}
