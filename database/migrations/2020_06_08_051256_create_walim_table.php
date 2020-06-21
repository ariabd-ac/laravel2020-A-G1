<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_wali');
            $table->string('alamat');
            $table->string('phone');
            $table->string('pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('walim');
    }
}
