<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pasiens', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('perawatan_pasiens_id')->constrained();
            $table->foreign('perawatan_pasiens_id')->references('id')->on('perawatan_pasiens');
            // $table->unsignedBigInteger('perawatan_pasiens_id');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('laporan_pasiens');
    }
}
