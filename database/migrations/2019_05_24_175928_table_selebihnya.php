<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSelebihnya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       

        Schema::create('bidang_hukum', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nama_bid_hukum',100);
            $table->text('keterangan');
            $table->bigInteger('id_admin')->unsigned()->index();
            $table->timestamps();
            $table->foreign('id_admin')->references('id')->on('users');
            
        });


        Schema::create('dokumentasi', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('judul_dokumentasi',100);
            $table->string('keterangan',255);
            $table->string('foto',255);        
            $table->bigInteger('id_admin')->unsigned()->index();
            $table->timestamps();
            $table->foreign('id_admin')->references('id')->on('users');
            
        });

        Schema::create('konsultasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nama',20);            
            $table->string('no_hp',20);
            $table->string('email',100)->nullable();
            $table->longText('deskripsi_konsultasi');
            $table->bigInteger('id_admin')->unsigned()->index();
            $table->timestamps();
            $table->foreign('id_admin')->references('id')->on('users');
            
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bidang_hukum');
        Schema::dropIfExists('det_bid_hukum');
        Schema::dropIfExists('det_dokumentasi');
        Schema::dropIfExists('Dokumentasi');
        Schema::dropIfExists('konsultasi');

    }
}
