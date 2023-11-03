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
        Schema::create('address_shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->string('street');
            $table->string('suburb');
            $table->string('number_outside');
            $table->string('number_inside')->nullable();
            $table->string('city');
            $table->string('reference')->nullable();
            $table->string('notes');
            $table->foreignId('user_id');
            $table->boolean('main')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_shippings');
    }
};
