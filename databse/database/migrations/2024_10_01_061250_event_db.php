<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Create admin_master table
        Schema::create('admin_master', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->text('admin_name')->nullable();
            $table->text('admin_password')->nullable();
        });

        // Create audience table
        Schema::create('audience', function (Blueprint $table) {
            $table->increments('a_id');
            $table->integer('event_id')->unsigned();
            $table->text('name');
            $table->text('address');
            $table->text('phone');
            $table->integer('members');
        });

        // Create event_master table
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

        // Create feedback_website table
        Schema::create('feedback_website', function (Blueprint $table) {
            $table->increments('f_id');
            $table->integer('u_id')->unsigned();
            $table->text('message');
            $table->text('email')->nullable();
        });

        // Create participate_master table
        Schema::create('participate_master', function (Blueprint $table) {
            $table->increments('participation_id');
            $table->integer('event_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->text('participation_status')->nullable();
            $table->text('p_name');
            $table->integer('status')->nullable();
        });

        // Create payments table
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('event_id')->unsigned()->nullable();
            $table->text('payment_amount')->nullable();
            $table->text('payment_date')->nullable();
            $table->text('payment_status')->nullable();
        });

        // Create user_master table
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_master');
        Schema::dropIfExists('audience');
        Schema::dropIfExists('event_master');
        Schema::dropIfExists('feedback_website');
        Schema::dropIfExists('participate_master');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('user_master');
    }
};
