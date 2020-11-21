<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20)->unique();            
            $table->string('username',20)->unique();
            $table->string('email',20)->unique();
            $table->timestamp('username_verified_at')->nullable();        
            $table->string('password');
            $table->enum('role', ['1','2','3']);
            $table->rememberToken();
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
        
        Schema::dropIfExists('users');
        
    }
}