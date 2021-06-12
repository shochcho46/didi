<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('project_id')->constrained();
            $table->text('description');
            $table->string('amount');
            $table->string('seen')->default('no');
            $table->string('status')->default('inactive');
            $table->string('awarded')->default('no');
            $table->string('reviewby')->nullable();
            $table->timestamp('review_time')->nullable();
            $table->string('actionby')->nullable();
            $table->timestamp('action_time')->nullable();
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
        Schema::dropIfExists('proposals');
    }
}
