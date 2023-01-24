<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_s_m_k_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('namasmk');
            $table->string('npsn');
            $table->string('akreditasi');
            $table->string('alamat');
            $table->string('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_s_m_k_s');
    }
};
