<?php

use App\Model\loaigiuong;
use Illuminate\Database\Seeder;

class LoaiGiuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        loaigiuong::create([
            'tenloaigiuong'  => 'Giường đơn',
            'urlloaigiuong'  => 'giuong-don',
        ]);

        loaigiuong::create([
            'tenloaigiuong'  => '2 giường đơn',
            'urlloaigiuong'  => '2-giuong-don',
        ]);

        loaigiuong::create([
            'tenloaigiuong'  => 'Giường đôi',
            'urlloaigiuong'  => 'giuong-doi',
        ]);

        loaigiuong::create([
            'tenloaigiuong'  => '2 giường đôi',
            'urlloaigiuong'  => '2-giuong-doi',
        ]);

        loaigiuong::create([
            'tenloaigiuong'  => 'Giường tầng',
            'urlloaigiuong'  => 'giuong-tang',
        ]);
    }
}
