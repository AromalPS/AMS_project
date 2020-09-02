<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('Assigned by');
            $table->string('subject');
            $table->integer('Maximum mark');
            $table->timestamp('Assigned on', 0);
            $table->dateTime('last_date_of_submission');
            $table->enum('assigned_class', ['CE', 'ME', 'CSE', 'EC']);
            $table->enum('assigned_year', ['1', '2', '3', '4']);
            $table->longText('Question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
