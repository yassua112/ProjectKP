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
            $table->integer('id_lawyers')->unsigned()->nullable()->index();
            $table->string('nama',25);        
            $table->string('NIP',15)->unique();
            $table->longtext('pendidikan');
            $table->longText('pengalaman');
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
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
        Schema::dropIfExists('lawyers');
    }
}
