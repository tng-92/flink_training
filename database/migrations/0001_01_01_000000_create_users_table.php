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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 125);
            $table->string('domain')->unique();
            $table->integer('status')->unique();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('businesses_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->index();
            $table->string('email', 125);
            $table->integer('phone');
            $table->string('short_description', 255);
            $table->integer('industry');
        });

        Schema::create('businesses_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->index();
            $table->string('address_1', 125);
            $table->string('address_2', 125);
            $table->string('address_3', 125);
            $table->string('address_4', 125);
            $table->string('postcode', 50);
            $table->string('country', 75);
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->index();
            $table->string('name');
            $table->integer('type')->default(3);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
        Schema::dropIfExists('businesses_details');
        Schema::dropIfExists('businesses_addresses');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
