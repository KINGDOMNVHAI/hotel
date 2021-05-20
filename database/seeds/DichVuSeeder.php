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
            'tendichvu'     => 'Dịch vụ điện',
            'motadichvu'    => 'Nếu bạn gặp vấn đề về: 
                                + Xử lý điện chập cháy, đứt ngầm, sự cố mất điện do: tủ điện, cầu dao, Attomat, công tắc, ổ cắm, phao điện. 
                                + Sửa chữa, lắp đặt mới thiết bị điện, đèn quạt các loại... 
                                Hãy liên hệ sớm với chúng tôi, chúng tôi sẽ giúp bạn trong thời gian nhanh nhất có thể',
            'hinhanh'       => 'suadien.jpg',
            'trangchu'      => '',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);

        dichvu::create([
            'tendichvu'     => 'Dịch vụ nước',
            'motadichvu'    => 'Nếu khách hàng cần ống nước bị bục vỡ, chảy nước ngập nhà hoặc bị nghẹt nước, sửa chữa và thay thế các thiết bị ngành nước: gãy vòi, hỏng van, xi phông, vòi sen, vòi chậu, lavabo... Hãy liên hệ với chúng tôi, chúng tôi sẽ hổ trợ nhiệt tình cho quý khách',
            'hinhanh'       => 'suaongnuoc1.jpeg',
            'trangchu'      => '',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);
        
        dichvu::create([
            'tendichvu'     => 'Dịch vụ internet',
            'motadichvu'    => 'Khi khách hàng muốn sử dụng internet hoặc sửa internet do sự cố trong phòng, hãy liên hệ với chúng tôi, chúng tôi sẽ liên hệ đội ngũ để hổ trợ bạn',
            'hinhanh'       => 'images.jpg',
            'trangchu'      => '',
            'enabledichvu'  => 1,
            'enabletrangchu' => 1,
        ]);
    }
}
