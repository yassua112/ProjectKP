<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_jdl_artikel')->unsigned()->nullable()->index();
            $table->string('judul_dokumentasi',100);                       
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
            $table->foreign('id_admin')->references('id_admin')->on('admin_web');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
