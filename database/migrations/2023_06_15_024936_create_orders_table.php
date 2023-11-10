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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('address_shipping'); 
            $table->text('products');
            $table->decimal('price');
            $table->string('status');
            $table->string('payment_type');
            $table->longText('info_mp');
            $table->foreignId('user_id');
            $table->timestamp('payment_date')->useCurrent()->nullable();
            $table->timestamp('cancel_date')->useCurrent()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
