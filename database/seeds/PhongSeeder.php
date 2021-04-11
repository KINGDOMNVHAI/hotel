<?php

use App\Model\phong;
use Illuminate\Database\Seeder;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        phong::create([
            'tenphong'          => 'phong 1',
            'kichthuoc'         => '30m2',
            // 'thoigian'          => '',
            'maloaiphong'       => 1,
            'phongnoibat'       => 1,
            'thumbnailphong'    => 'thumbnail.jpg',
        ]);

        phong::create([
            'tenphong'          => 'phong 2',
            'kichthuoc'         => '40m2',
            // 'thoigian'          => '',
            'maloaiphong'       => 1,
            'thumbnailphong'    => 'thumbnail.jpg',
        ]);
    }
}
