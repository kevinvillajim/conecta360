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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('model')->nullable();
            $table->text('img')->default('imgProd.png');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedors');
            $table->unsignedBigInteger('id_categoria');
            $table->integer('minStock')->default(10);
            $table->float('percent');
            $table->float('cost');
            $table->float('costIva');
            $table->float('costMayor');
            $table->float('costPVP');
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
        Schema::dropIfExists('productos');
    }
};