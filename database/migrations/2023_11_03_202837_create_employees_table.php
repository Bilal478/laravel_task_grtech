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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->unique()->nullable();
            $table->unsignedBigInteger('companie_id')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->foreign('companie_id')->references('id')->on('companies')->onDelete('cascade');
            $table->index(['companie_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
