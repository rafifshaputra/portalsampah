<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasabahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',128);
            $table->string('kontak',128);
            $table->string('usia',255);
            $table->string('pekerjaan',255);
            $table->string('kelurahan',255);
            $table->string('kecamatan',255);
            $table->string('kodePos',255);
            $table->string('domisili',255);
            $table->string('membantu',20);
            $table->string('menggunakan',20);
            $table->string('tanggapanBox',255);
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
        Schema::dropIfExists('nasabahs');
    }
}
