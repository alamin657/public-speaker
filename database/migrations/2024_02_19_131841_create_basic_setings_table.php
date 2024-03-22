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
        Schema::create('basic_setings', function (Blueprint $table) {
            $table->id();
            $table->string('bs_title')->nullable();
            $table->string('bs_logo')->nullable();
            $table->string('bs_favicon')->nullable();
            $table->string('bs_address')->nullable();
            $table->string('bs_phone')->nullable();
            $table->string('bs_email')->nullable();
            $table->string('bs_facebook')->nullable();
            $table->string('bs_youtube')->nullable();
            $table->string('bs_instagram')->nullable();
            $table->string('bs_linkedin')->nullable();
            $table->string('bs_twitter')->nullable();
            $table->longText('bs_footertext')->nullable();
            $table->string('bs_map')->nullable();
            $table->string('bs_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_setings');
    }
};
