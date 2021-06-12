<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('heading');
            $table->text('description');
            $table->string('piclocation');
            $table->string('status');
            $table->string('amount');
            $table->string('serial');
            $table->string('reviewby')->nullable();
            $table->timestamp('review_time')->nullable();
            $table->string('actionby')->nullable();
            $table->timestamp('action_time')->nullable();
            $table->string('view')->nullable();
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
        Schema::dropIfExists('gigs');
    }
}
