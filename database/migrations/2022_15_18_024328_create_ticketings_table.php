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
        Schema::create('ticketings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_subject')->nullable();
            $table->bigInteger('id_customer')->unsigned();
            $table->string('cover')->nullable();
            $table->bigInteger('id_department')->unsigned();
            $table->string('nama_stat')->default('Open');
            $table->bigInteger('id_priority')->unsigned();
            $table->bigInteger('id_jenisrequest')->unsigned();
          
            $table->date('tanggal_request')->nullable()->nullablle();
            $table->date('tanggal_selesai')->nullable()->nullablle();
            $table->string('nama_pic')->nullable()->nullablle();
            $table->string('deskripsi')->nullable()->nullablle();

            // relasi
            // fk ticketing
            $table->foreign('id_customer')->references('id')
                ->on('customers');
            $table->foreign('id_department')->references('id')
                ->on('departments');
            $table->foreign('id_priority')->references('id')
                ->on('priorities');
            $table->foreign('id_jenisrequest')->references('id')
                ->on('jenisrequests');
           
           
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
        Schema::dropIfExists('ticketing');
    }
};
