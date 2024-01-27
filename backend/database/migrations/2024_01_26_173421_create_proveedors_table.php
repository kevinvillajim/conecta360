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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('logo')->default("logoProv.png");
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('address');
            $table->string('web')->nullable();
            $table->string('asesor')->nullable();
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
        Schema::dropIfExists('proveedors');
    }
};