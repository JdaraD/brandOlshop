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
        Schema::create('admin_colors', function (Blueprint $table) {
            $table->id();
            $table->string('header',20);
            $table->string('sidebar',20);
            $table->string('color_sidebar_judul',20);
            $table->string('Button_Active_Sidebar',20);
            $table->string('content',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_colors');
    }
};
