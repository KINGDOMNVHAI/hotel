<?php
namespace App\Services\backend;

use App\Model\booking;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class BookingService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function listBookingHavePagination($limit)
    {
        $query = booking::where('idbooking', '=', $id)->paginate($limit);

        return $query;
    }
}
