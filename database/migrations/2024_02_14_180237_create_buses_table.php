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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('bus_name');
            $table->string('bus_code');
            $table->string('type');
            $table->foreignId('operator_id')->constrained('operators','id');
            $table->integer('total_seats');
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('driver_id')->constrained('drivers','id');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
