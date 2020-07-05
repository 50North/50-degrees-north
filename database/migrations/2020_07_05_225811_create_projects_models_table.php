<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('proj_type');
            $table->string('proj_sname');
            $table->string('proj_lname');
            $table->string('proj_desc');
            $table->string('proj_url');
            $table->string('proj_imgloc');
            $table->string('proj_content');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_models');
    }
}
