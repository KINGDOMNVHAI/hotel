<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->increments('maphong');
            $table->string('tenphong');
            $table->string('kichthuoc');
            $table->text('mota');
            $table->text('noidung');
            // $table->date('thoigian');
            $table->integer('maloaiphong');
            $table->integer('phongnoibat')->default(0);
            $table->string('thumbnailphong');
            $table->integer('enablephong')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phong');
    }
}
