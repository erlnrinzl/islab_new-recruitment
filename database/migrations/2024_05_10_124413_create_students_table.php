<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->length(10);
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('major_id')->constrained('campus_majors');
            $table->foreignId('region_id')->constrained('campus_regions');
            $table->foreignId('streamcourse_id')->nullable()->constrained('campus_stream_courses');
            $table->string('name');
            $table->string('domicile');
            $table->boolean('active_status');
            $table->float('gpa', 3, 2);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
