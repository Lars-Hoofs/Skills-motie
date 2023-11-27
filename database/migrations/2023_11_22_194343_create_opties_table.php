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
        Schema::create('opties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('S_id');
            $table->foreign('S_id')->references('id')->on('stelling')->onDelete('cascade');
            $table->string('optie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opties');
    }
};
