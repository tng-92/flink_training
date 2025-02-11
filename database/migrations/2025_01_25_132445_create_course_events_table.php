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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->index();
            $table->foreignId('course_id');
            $table->unsignedBigInteger('trainer_id')->index();
            $table->unsignedBigInteger('created_by');
            $table->integer('code')->unique();
            $table->integer('status')->index();
            $table->date('start_date')->index();
            $table->date('end_date')->index();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->integer('net_price');
            $table->integer('tax');
            $table->integer('gross_price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
