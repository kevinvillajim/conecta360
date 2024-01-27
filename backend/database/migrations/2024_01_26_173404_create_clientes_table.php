<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('country');
            $table->date('birth')->nullable();
            $table->string('gender');
            $table->dateTime('join')->default(now());
            $table->boolean('status');
            $table->string('type');
            $table->unsignedBigInteger("id_user_created");
            $table->foreign("id_user_created")->references("id")->on("users");
            $table->unsignedBigInteger("id_user_updated");
            $table->foreign("id_user_updated")->references("id")->on("users");
            //Usuario Asignado 
            $table->unsignedBigInteger('id_usuario_assigned');
            $table->foreign('id_usuario_assigned')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};