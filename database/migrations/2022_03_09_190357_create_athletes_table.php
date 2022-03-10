<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('forty')->nullable();
            $table->string('city_school')->nullable();
            $table->string('state')->nullable();
            $table->string('college_commitment')->nullable();
            $table->text('synopsis')->nullable();
            $table->text('national_honors')->nullable();
            $table->text('other_rankings')->nullable();
            $table->text('junior_local_honors')->nullable();
            $table->text('sophomore_local_honors')->nullable();
            $table->text('freshman_local_ranking')->nullable();
            $table->text('combines')->nullable();
            $table->text('other_comments')->nullable();
            $table->text('news_and_notes')->nullable();
            $table->text('top_offers')->nullable();
            $table->string('projected_college_position')->nullable();
            $table->string('national_ranking_position')->nullable();
            $table->string('state_ranking')->nullable();
            $table->string('rating')->nullable();
            $table->string('class')->nullable();
            $table->text('links')->nullable();
            $table->text('contact_information')->nullable();
            $table->string('token')->nullable();
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
        Schema::dropIfExists('athletes');
    }
}
