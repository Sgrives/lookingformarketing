<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('company_id');
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedInteger('category_id');
			$table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('type_id');
			$table->foreign('type_id')->references('id')->on('types');
            $table->unsignedInteger('desk_id');
			$table->foreign('desk_id')->references('id')->on('desks');
            $table->string('record');
            $table->string('title');
			$table->string('slug');
			$table->string('location');
            $table->string('location_slug');
			$table->text('apply');
            $table->text('description');
            $table->boolean('active')->default(0);
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
