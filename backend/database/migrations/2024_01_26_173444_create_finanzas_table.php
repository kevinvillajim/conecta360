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
        Schema::create('finanzas', function (Blueprint $table) {
            $table->id();
            $table->dateTime("date")->default(now());
            $table->unsignedBigInteger("id_cliente")->nullable();
            $table->foreign("id_cliente")->references("id")->on("clientes");
            $table->unsignedBigInteger("id_proveedor")->nullable();
            $table->foreign("id_proveedor")->references("id")->on("proveedors");
            $table->string("concept");
            $table->string("description");
            $table->integer("amount");
            $table->string("type");
            $table->string("status");
            $table->string("img")->nullable();
            $table->unsignedBigInteger("id_user_created");
            $table->foreign("id_user_created")->references("id")->on("users");
            $table->unsignedBigInteger("id_user_updated");
            $table->foreign("id_user_updated")->references("id")->on("users");
            $table->float("total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finanzas');
    }
};