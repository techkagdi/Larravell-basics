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
        Schema::create('participate_master', function (Blueprint $table) {
            $table->increments('participation_id');
            $table->integer('event_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->text('participation_status')->nullable();
            $table->text('p_name');
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participate_master');
    }
};
