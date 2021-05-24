<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DichVuSeeder::class);
        $this->call(PhanquyenSeeder::class);
        $this->call(PhongSeeder::class);
        $this->call(LoaiPhongSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
