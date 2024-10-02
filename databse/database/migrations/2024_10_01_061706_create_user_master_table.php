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
        Schema::create('user_master', function (Blueprint $table) {
            $table->increments('user_id');
            $table->text('user_name')->nullable();
            $table->text('user_email')->nullable();
            $table->text('user_password')->nullable();
            $table->text('user_address')->nullable();
            $table->text('user_age')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_master');
    }
};
