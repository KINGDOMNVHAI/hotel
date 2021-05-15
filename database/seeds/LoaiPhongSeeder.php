<?php

use App\Model\loaiphong;
use Illuminate\Database\Seeder;

class LoaiPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        loaiphong::create([
            'tenloaiphong'  => 'Phòng đơn',
            'urlloaiphong'  => PHONG_DON,
            'gialoaiphong'  => GIA_PHONG_DON
        ]);

        loaiphong::create([
            'tenloaiphong'  => 'Phòng đôi',
            'urlloaiphong'  => PHONG_DOI,
            'gialoaiphong'  => GIA_PHONG_DOI
        ]);

        loaiphong::create([
            'tenloaiphong'  => 'Phòng 2 giường đơn',
            'urlloaiphong'  => HAI_GIUONG_DON,
            'gialoaiphong'  => GIA_HAI_GIUONG_DON
        ]);

        loaiphong::create([
            'tenloaiphong'  => 'Phòng 2 giường đôi',
            'urlloaiphong'  => HAI_GIUONG_DOI,
            'gialoaiphong'  => GIA_HAI_GIUONG_DOI
        ]);
    }
}
