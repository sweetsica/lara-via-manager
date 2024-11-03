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
        Schema::create('vias', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nullable();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('email_password')->nullable();
            $table->string('email_recover')->nullable();
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->string('friends')->nullable();
            $table->string('groups')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vias');
    }
};
