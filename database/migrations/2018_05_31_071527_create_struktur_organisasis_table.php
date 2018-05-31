<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrukturOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur_organisasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jabatan');
            $table->unsignedInteger('kurikulum_id');
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums')->onDelete('CASCADE');
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
        Schema::dropIfExists('struktur_organisasis');
    }
}
