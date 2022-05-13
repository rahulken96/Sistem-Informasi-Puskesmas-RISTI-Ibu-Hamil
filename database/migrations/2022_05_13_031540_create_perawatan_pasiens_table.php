<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatanPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawatan_pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasiens');
            $table->foreignId('id_kesehatan')->constrained('kesehatan_pasiens');
            $table->integer('kehamilan_ke')->unsigned();
            $table->string('keluhan')->nullable();
            $table->string('solusi')->nullable();
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
        Schema::dropIfExists('perawatan_pasiens');
    }
}
