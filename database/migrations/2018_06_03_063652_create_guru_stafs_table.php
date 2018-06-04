<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuruStafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_stafs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('mapel');
            $table->unsignedInteger('struktur_organisasi_id');
            $table->foreign('struktur_organisasi_id')->references('id')->on('struktur_organisasis')->onDelete('CASCADE');
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
        Schema::dropIfExists('guru_stafs');
    }
}
