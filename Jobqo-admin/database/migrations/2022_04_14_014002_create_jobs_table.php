<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name_job');
            $table->text('desk_job');
            $table->foreignId('salaries_id')->nullable();
            $table->foreignId('company_id')->nullable();
            $table->foreignId('job_category_id')->nullable();
            $table->foreignId('job_position_id')->nullable();
            $table->text('job_requirement');
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
        Schema::dropIfExists('jobs');
    }
}
