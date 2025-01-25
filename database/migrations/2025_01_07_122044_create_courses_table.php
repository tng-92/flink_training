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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('owned_by')->index();
            $table->string('code', 50);
            $table->string('name', 120);
            $table->integer('net_price');
            $table->integer('tax');
            $table->integer('gross_price');
            $table->string('short_description', 255);
            $table->integer('type')->index();
            $table->integer('status')->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
