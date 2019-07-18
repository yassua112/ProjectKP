<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_artikel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_detail_artikel')->unsigned()->nullable()->index();
            $table->longText('deskripsi');            
            $table->string('gambar',100);
            $table->string('email',100);
            $table->integer('id_jdl_artikel')->unsigned();
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
            $table->foreign('id_jdl_artikel')->references('id_jdl_artikel')->on('artikel');
            $table->foreign('id_admin')->references('id_admin')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_artikel');
    }
}
