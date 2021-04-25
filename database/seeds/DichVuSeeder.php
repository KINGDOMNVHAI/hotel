<?php

use App\Model\dichvu;
use Illuminate\Database\Seeder;

class DichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dichvu::create([
            'tendichvu'     => 'Nhà hàng',
            'motadichvu'    => 'Đến với dịch vụ nhà hàng du khách có thể đặt cho mình các bữa ăn tự chọn, buffet hoặc các món ăn theo gia đình.',
            'hinhanh'       => 'restaurant.jpg',
            'trangchu'      => '<i class="flaticon-tray-1"></i>',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'SPA',
            'motadichvu'    => 'Các dịch vụ Spa được mở ra bao gồm: xông hơi, lột mụn, gội đầu... để đáp ứng nhu cầu làm đẹp cho khách hàng.',
            'hinhanh'       => 'spa.jpg',
            'trangchu'      => '<i class="flaticon-nature"></i>',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Phòng họp',
            'motadichvu'    => 'Khách sạn chuyên cung cấp dịch vụ cho thuê phòng họp, hội nghị, tiệc cưới với sức chứa từ 5 đến 30 chỗ.',
            'hinhanh'       => 'conference.jpg',
            'trangchu'      => '<i class="flaticon-screen-1"></i>',
            'enabledichvu'  => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Hồ bơi',
            'motadichvu'    => 'Có nhiều loại hồ bơi phục vụ cho nhiều đối tượng khác nhau, từ hồ bơi trẻ em đến người lớn.',
            'hinhanh'       => 'swimming-1.jpg',
            'trangchu'      => '<i class="flaticon-sports"></i>',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Karaoke',
            'motadichvu'    => '',
            'hinhanh'       => 'karaoke.jpg',
            'trangchu'      => '<i class="fa fa-microphone"></i>',
            'enabledichvu'  => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Cho thuê xe máy tự lái',
            'motadichvu'    => '',
            'hinhanh'       => 'motobike.jpg',
            'trangchu'      => '<i class="fas fa-motorcycle"></i>',
            'enabledichvu'  => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Thu đổi ngoại tệ',
            'motadichvu'    => '',
            'hinhanh'       => 'exchange.jpg',
            'enabledichvu'  => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Phòng gym',
            'motadichvu'    => 'Khi đi công tác hay du lịch nhưng nhiều người vẫn muốn đảm bảo tiến độ tập luyện cho cơ thể mình.',
            'hinhanh'       => 'gym.jpg',
            'trangchu'      => '<i class="fa fa-heartbeat"></i>',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Phòng xông hơi',
            'motadichvu'    => '',
            'hinhanh'       => 'steam.jpg',
            'enabledichvu'  => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Quán bar',
            'motadichvu'    => '',
            'hinhanh'       => 'bar.jpg',
            'enabledichvu'  => 1,
        ]);
    }
}
