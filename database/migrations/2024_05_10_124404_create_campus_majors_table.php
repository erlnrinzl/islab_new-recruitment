<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCampusMajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_majors', function (Blueprint $table) {
            $table->id();
            $table->string('major_name');
            $table->string('major_type');
            $table->timestamps();
        });

        DB::table('campus_majors')->insert([
            ['major_name' => 'Information Systems - Reguler', 'major_type' => 'Reguler', 'created_at' => now(), 'updated_at' => now()],
            ['major_name' => 'Information Systems - Master Track', 'major_type' => 'Master Track', 'created_at' => now(), 'updated_at' => now()],
            ['major_name' => 'Information Systems & Accounting', 'major_type' => 'Double Degree', 'created_at' => now(), 'updated_at' => now()],
            ['major_name' => 'Information Systems & Management', 'major_type' => 'Double Degree', 'created_at' => now(), 'updated_at' => now()],
            ['major_name' => 'Business Information Technology', 'major_type' => 'Reguler', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campus_majors');
    }
}
