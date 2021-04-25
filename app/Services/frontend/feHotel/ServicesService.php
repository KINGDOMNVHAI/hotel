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

    /**
     *
     *
     * @return void
     */
    public function listservice($limit = NULL)
    {
        // ORM Laravel
        $query = DB::table('dichvu')
            ->where('enabledichvu', '=', 1);

        if ($limit != null) {
            $query = $query->limit($limit);
        }
        $query = $query->get();

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
