<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MLCuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cuentas', function (Blueprint $table) {
            $table->id();              
            $table->string('name');
            $table->unsignedBigInteger('id_super_cuenta');
            $table->foreign('id_super_cuenta')->references('id')->on('users');
            $table->string('client_id')->unique();
            $table->string('client_secret')->unique();
            $table->string('authorization_code')->unique();
            $table->string('access_token')->nullable();
            $table->string('user_id')->nullable();
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
        //
        Schema::dropIfExists('users');
    }
}
