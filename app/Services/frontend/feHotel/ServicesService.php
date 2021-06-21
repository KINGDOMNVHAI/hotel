<?php
namespace App\Services\frontend\feHotel;

use App\Model\dichvu;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ServicesService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /*
     *
     *
     * @return void
     */
    public function listservice($limit = NULL) //function này cũng dùng cho listroom
    {
        // ORM Laravel
        $query = DB::table('dichvu') // lấy database bảng dịch vụ
            ->where('enabledichvu', '=', 1); //lấy tất cả những dịch vụ ko bị xóa. Còn nếu xóa đi thì vào database chỉnh enabledichvu = 0

        if ($limit != null) {
            $query = $query->limit($limit); // nếu nhập giới hạn thì sẽ trả về dsach giới hạn limit dịch vụ
        }
        $query = $query->get(); // nếu mình ko nhập giới hạn thì ko có giới hạn số lượng kết quả trả về

        return $query;
    }

    public function detailservice($idService)
    {
        $query = DB::table('dichvu')
            ->select(
                'madichvu', 'tendichvu'
                ,'motadichvu','hinhanh','trangchu', 'enabledichvu'
            )
            ->where('enabledichvu', '=', 1)
            ->where('madichvu', '=', $idService)
            ->first();

        return $query;
    }

    public function listserviceHavePagination($limit = NULL)
    {
        $query = DB::table('dichvu')->where('enabledichvu', '=', 1);

        if ($limit != null) {
            $query = $query->paginate($limit);
        } else {
            $query = $query->paginate(15);
        }
        return $query;
    }

    public function listserviceslider()
    {
        // ORM Laravel
        $query = DB::table('dichvu')
            ->where('enabledichvu', '=', 1)
            ->where('enabletrangchu', '=', 1)
            ->limit(4)
            ->get();

        return $query;
    }
}
