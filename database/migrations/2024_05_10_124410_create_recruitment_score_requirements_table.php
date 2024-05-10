<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentScoreRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('recruitment_score_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('campus_courses');
            $table->foreignId('detail_id')->constrained('recruitment_details');
            $table->float('course_score_min', 3, 2);
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
        Schema::dropIfExists('recruitment_score_requirements');
    }
}
