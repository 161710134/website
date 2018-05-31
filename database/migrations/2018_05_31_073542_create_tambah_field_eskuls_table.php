<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTambahFieldEskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_field_ekstrakulikulers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('prestasi_id');
            $table->foreign('prestasi_id')->references('id')->on('prestasis')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('esktrakulikulers', function($table) {
            $table->dropColumn('prestasi_id');
        });
    }
}
