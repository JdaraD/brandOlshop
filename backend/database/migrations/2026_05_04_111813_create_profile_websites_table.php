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
        Schema::create('profile_websites', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('logo');
            $table->string('name', 100);
            $table->string('email');
            $table->string('sm_facebook')->nullable();
            $table->string('sm_instagram')->nullable();
            $table->string('to_tiktok')->nullable();
            $table->string('to_shoppee')->nullable();
            $table->string('to_tokopedia')->nullable();
            $table->text('address')->nullable();
            $table->text('profile_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_websites');
    }
};
