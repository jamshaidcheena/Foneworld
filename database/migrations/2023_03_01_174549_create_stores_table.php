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
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name');
            $table->string('opening_weekdays');
            $table->string('opening_time_1');
            $table->text('closing_time_1');
            $table->string('opening_weekends');
            $table->string('weekend_status');
            $table->string('opening_time_2');
            $table->string('closing_time_2');
            $table->string('store_address');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
