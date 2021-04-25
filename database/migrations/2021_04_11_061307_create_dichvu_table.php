<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDichvuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dichvu', function (Blueprint $table) {
            $table->increments('madichvu');
            $table->string('tendichvu');
            $table->text('motadichvu');
            $table->string('hinhanh');
            $table->string('trangchu')->nullable();
            $table->integer('enabledichvu');
            $table->integer('enabletrangchu')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dichvu');
    }
}
