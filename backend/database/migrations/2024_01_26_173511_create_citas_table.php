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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->dateTime("date_taken")->default(now());
            $table->dateTime("date_cita");
            $table->string("description");
            $table->unsignedBigInteger("id_cliente");
            $table->foreign("id_cliente")->references("id")->on("clientes");
            $table->unsignedBigInteger("id_user_assigned");
            $table->foreign("id_user_assigned")->references("id")->on("users");
            $table->unsignedBigInteger("id_user_created");
            $table->foreign("id_user_created")->references("id")->on("users");
            $table->unsignedBigInteger("id_user_updated");
            $table->foreign("id_user_updated")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};