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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('value');
            $table->string('type');
            $table->string('description');
            $table->unsignedBigInteger('id_user_assigned');
            $table->foreign('id_user_assigned')->references('id')->on('users');
            $table->unsignedBigInteger('id_supervisor_assigned');
            $table->foreign('id_supervisor_assigned')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};
