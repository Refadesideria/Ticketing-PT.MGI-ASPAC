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
        Schema::create('user_ticketings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_user');
            $table->string('ussername_user');
            $table->string('email');
            $table->string('password');
            $table->string('id_divisi');
            $table->string('id_jabatan');
            $table->string('id_kategori');
            $table->string('id_jenisrequest');
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
        Schema::dropIfExists('user_ticketings');
    }
};
