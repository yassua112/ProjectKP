<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('nama',25);        
            $table->string('NIP',15)->unique();
            $table->string('email',15)->unique();
            $table->string('NoHp',255);
            $table->string('gender',25);
            $table->longText('SekilasTentang');
            $table->string('Foto',255);
            $table->string('fileCV',255);
            $table->bigInteger('id_admin')->unsigned()->index();
            $table->timestamps();
            $table->foreign('id')->references('id')->on('users');
            
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawyers');
    }
}
