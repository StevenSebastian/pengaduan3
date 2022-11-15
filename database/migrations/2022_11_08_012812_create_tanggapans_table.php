<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->id();
            $table->integer('pengaduan_id');
            $table->date('tgl_tanggapan');
            $table->string('tanggapan');
            $table->integer('user_id');
            $table->foreign('pengaduan_id')->refrences('id')->on('pengaduans')->onDelete('cascade');
            $table->foreign('user_id')->refrences('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tanggapans');
    }
}
