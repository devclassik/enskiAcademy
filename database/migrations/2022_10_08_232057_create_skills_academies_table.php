<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_academies', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('category');
            $table->string('title');
            $table->string('price');
            $table->string('bulletin');
            $table->string('description');
            $table->string('full_description');
            $table->string('picture_path');
//            $table->string('video_path');
            $table->string('icon_path');
            $table->string('curriculum');
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
        Schema::dropIfExists('skills_academies');
    }
}
