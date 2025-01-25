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
        Schema::create('events_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->index();
            $table->foreignId('event_id');
            $table->integer('status');
            $table->string('code', 55);
            $table->string('name', 255);
            $table->date('date');
            $table->time('start_time')->nullable()->index();
            $table->time('end_time')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_sessions');
    }
};
