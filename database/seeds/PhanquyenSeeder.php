<?php

use App\Model\phanquyen;
use Illuminate\Database\Seeder;
class PhanquyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        phanquyen::create([
            'tenphanquyen'  => ROLE_NAME_ADMIN,
        ]);
        phanquyen::create([
            'tenphanquyen'  => ROLE_NAME_EDITOR,
        ]);
        phanquyen::create([
            'tenphanquyen'  => ROLE_NAME_MEMBER,
        ]);
    }
}
