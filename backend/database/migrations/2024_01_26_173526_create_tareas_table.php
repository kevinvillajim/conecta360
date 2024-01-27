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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_create');
            $table->dateTime('date_update');
            $table->string('title');
            $table->text('description');
            $table->boolean('done');
            $table->unsignedBigInteger("id_user_assigned");
            $table->foreign("id_user_assigned")->references("id")->on("users");
            $table->unsignedBigInteger('id_supervisor_assigned');
            $table->foreign('id_supervisor_assigned')->references('id')->on('users');
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
        Schema::dropIfExists('tareas');
    }
};
