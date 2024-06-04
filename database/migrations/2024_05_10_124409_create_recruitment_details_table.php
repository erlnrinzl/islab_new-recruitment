<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('recruitment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('recruitment_types');
            $table->foreignId('period_id')->constrained('recruitment_periods');
            $table->integer('batch');
            $table->date('date_start');
            $table->date('date_end');
            $table->foreignId('major_id')->constrained('campus_majors');
            $table->integer('binusian');
            $table->float('gpa_required', 3, 2);
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
        Schema::dropIfExists('recruitment_details');
    }
}
