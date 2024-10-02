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
        Schema::create('audience', function (Blueprint $table) {
            $table->increments('a_id');
            $table->integer('event_id')->unsigned();
            $table->text('name');
            $table->text('address');
            $table->text('phone');
            $table->integer('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audience');
    }
};
