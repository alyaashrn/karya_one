<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
    * @return void
     */


    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->bigIncrements('idPekerjaan');
            $table->string('namaPekerjaan');
            $table->string('kategori');
            $table->string('gaji');
            $table->longText('deskripsi');
            $table->longText('syarat');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
};
