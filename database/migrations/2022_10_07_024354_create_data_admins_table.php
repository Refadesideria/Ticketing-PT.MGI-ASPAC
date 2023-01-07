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
        Schema::create('data_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_kantors');
            $table->string('id_jabatans');
            $table->string('id_ranks');
            $table->string('id_units');
            $table->string('id_kategoris');
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
        Schema::dropIfExists('data_admins');
    }
};
