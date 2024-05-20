<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCampusRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('campus_regions', function (Blueprint $table) {
            $table->id();
            $table->string('region_name');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();

        DB::table('campus_regions')->insert([
            ['region_name' => 'Kemanggisan', 'created_at' => now(), 'updated_at' => now()],
            ['region_name' => 'Alam Sutera', 'created_at' => now(), 'updated_at' => now()],
            ['region_name' => 'Bekasi', 'created_at' => now(), 'updated_at' => now()],
            ['region_name' => 'Semarang', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campus_regions');
    }
}
