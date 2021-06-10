<?php

use App\Model\booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        booking::create([
            'fullname' => 'hai',
            'email' => 'nvhai2306@gmail.com',
            'phone' => '0833999693',
            'maphong' => 1,
            'tenphong' => 'phong 1',
            'tenloaiphong' => 'Phòng đơn',
            'gialoaiphong' => GIA_PHONG_DON,
            'fromdate' => '2021-07-01',
            'todate' => '2021-07-03',
            'night' => 2,
        ]);
    }
}
