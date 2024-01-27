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
        Schema::create('proformalists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_proformas');
            $table->foreign('id_proformas')->references('id')->on('proformas');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('id_user_assigned');
            $table->foreign('id_user_assigned')->references('id')->on('users');
            $table->unsignedBigInteger('id_supervisor_assigned');
            $table->foreign('id_supervisor_assigned')->references('id')->on('users');
            $table->string('status');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proformalists');
    }
};
