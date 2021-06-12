<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('mainmenu_id')->constrained();
            $table->foreignId('submenu_id')->constrained();
            $table->string('heading');
            $table->text('description');
            $table->string('jobtype');
            $table->string('amount');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('status')->default('inactive');
            $table->string('reviewby')->nullable();
            $table->timestamp('review_time')->nullable();
            $table->string('actionby')->nullable();
            $table->timestamp('action_time')->nullable();
            $table->string('view')->nullable();
            $table->string('skill_name');
            $table->string('proposal')->default('yes');
            $table->string('pintocategory')->nullable();
            $table->string('pintohome')->nullable();
            $table->string('pindatecategory')->nullable();
            $table->string('pindatehome')->nullable();
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
        Schema::dropIfExists('projects');
    }

}
