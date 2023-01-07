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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_ticketing')->unsigned();
            $table->date('tanggal_request');
            $table->date('tanggal_selesai');
            $table->string('nama_pic');
            $table->text('deskripsi');
            $table->foreign('id_ticketing')->references('id')
            ->on('ticketings');
       
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
        Schema::dropIfExists('details');
    }
};
