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
        Schema::create('course_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreign('course_id')->index();
            $table->text('feild_1');
            $table->taxt('feild_2');
            $table->taxt('feild_3');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('course_descriptions');
    }
};
