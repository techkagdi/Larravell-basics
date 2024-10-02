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
        Schema::create('event_master', function (Blueprint $table) {
            $table->increments('event_id');
            $table->text('event_name')->nullable();
            $table->text('event_description')->nullable();
            $table->text('event_date')->nullable();
            $table->text('event_location')->nullable();
            $table->text('event_time')->nullable();
            $table->text('event_charges')->nullable();
            $table->text('loc');
            $table->text('f_prize');
            $table->text('s_prize');
            $table->text('t_prize');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_master');
    }
};
