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
        Schema::create('admin_master', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->text('admin_name')->nullable();
            $table->text('admin_password')->nullable();
        });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_master');
    }
};
