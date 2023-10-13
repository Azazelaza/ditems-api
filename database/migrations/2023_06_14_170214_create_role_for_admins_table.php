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
        Schema::create('role_for_admins', function (Blueprint $table) {
            $table->id();
            //?TODO: ESTA TABLA NO SE UTILIZA ELIMINARLA
            $table->foreignId('admin_id');
            $table->foreignId('rol_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_for_admin');
    }
};
