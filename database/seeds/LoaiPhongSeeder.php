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
            'tenloaiphong'  => 'Phòng có gác',
            'urlloaiphong'  => 'phong-co-gac',
        ]);

        loaiphong::create([
            'tenloaiphong'  => 'Phòng không có gác',
            'urlloaiphong'  => 'phong-khong-co-gac',
        ]);
    }
}
