<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id('driver_id');
            $table->string('name');
            $table->string('gender');
            $table->string('contact');
            
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
        });

        // Make sure 'id' in 'buses' is indexed
        Schema::table('buses', function (Blueprint $table) {
            $table->index('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('drivers');
    }
};
