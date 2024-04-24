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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('order_num');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('message')->nullable();
            $table->string('subject')->nullable();
            $table->enum('status', ['open', 'complete', 'canceled'])->default('open');
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->on('users')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
