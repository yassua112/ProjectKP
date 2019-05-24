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
            $table->bigIncrements('id');
            $table->integer('id_bid_hukum')->unsigned()->nullable()->index();
            $table->string('nama_bid_hukum',100);                       
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
            $table->foreign('id_admin')->references('id_admin')->on('admin_web');
            
        }); 
        
        Schema::create('det_bid_hukum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_det_bid_hukum')->unsigned()->nullable()->index();
            $table->longText('deskripsi');                       
            $table->integer('id_bid_hukum')->unsigned();
            $table->timestamps();
            $table->foreign('id_bid_hukum')->references('id_bid_hukum')->on('bidang_hukum');
            
        });

        Schema::create('Dokumentasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_dokumentasi')->unsigned()->nullable()->index();
            $table->string('judul_dokumentasi',100);
            $table->date('tanggal_upload');            
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
            $table->foreign('id_admin')->references('id_admin')->on('admin_web');
            
        });

        Schema::create('det_dokumentasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_det_dokumentasi')->unsigned()->nullable()->index();
            $table->string('foto1',100);            
            $table->string('foto2',100);
            $table->string('foto3',100);
            $table->string('foto4',100);
            $table->string('foto5',100);
            $table->string('foto6',100);            
            $table->integer('id_dokumentasi')->unsigned();
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
            $table->foreign('id_admin')->references('id_admin')->on('admin_web');
            $table->foreign('id_dokumentasi')->references('id_dokumentasi')->on('Dokumentasi');
            
        });

        Schema::create('konsultasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_konsultasi')->unsigned()->nullable()->index();
            $table->string('nama',20);            
            $table->string('no_hp',20);
            $table->string('email',100)->nullable();
            $table->longText('deskripsi_konsultasi');
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
        Schema::dropIfExists('bidang_hukum');
        Schema::dropIfExists('det_bid_hukum');
        Schema::dropIfExists('det_dokumentasi');
        Schema::dropIfExists('Dokumentasi');
        Schema::dropIfExists('konsultasi');

    }
}
