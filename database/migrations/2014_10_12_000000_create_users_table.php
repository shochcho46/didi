<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('type')->default('normal');
            $table->string('status')->default('disable');
            $table->string('subscrib_id')->nullable();
            $table->string('lastday');
            $table->string('piclocation')->nullable();
            $table->string('country');
            $table->string('reviewby')->nullable();
            $table->timestamp('review_time')->nullable();
            $table->string('actionby')->nullable();
            $table->timestamp('action_time')->nullable();
            $table->string('view')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
