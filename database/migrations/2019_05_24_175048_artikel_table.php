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
            $table->string('judul_artikel',100);
            $table->text('isi_artikel'); 
            $table->string('foto',255);
            $table->string('username',255);                      
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
        Schema::dropIfExists('artikel');
    }
}
