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
        Schema::create('address_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->string('business_name');
            $table->string('rfc');
            $table->string('street');
            $table->string('suburb');
            $table->string('number_outside');
            $table->string('number_inside')->nullable();
            $table->string('city');
            $table->string('tax_certificate')->nullable();
            $table->string('name_tax_certificate')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address_invoices');
    }
};
