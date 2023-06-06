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
        Schema::create('glucoses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid');
            $table->integer('angka');
            $table->date('Periode');
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glucoses');
    }
};
