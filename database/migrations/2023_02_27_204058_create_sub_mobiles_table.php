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
        Schema::create('sub_mobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile_id');
            $table->string('name');
            $table->string('rating');
            $table->text('sub_mobile_description');
            $table->string('sub_mobile_image');
            $table->string('sub_mobile_front_screen');
            $table->string('sub_mobile_front_back_cover');
            $table->string('sub_mobile_battery_charging');
            $table->string('sub_mobile_camera_front_rear');
            $table->string('sub_mobile_custom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_mobiles');
    }
};
