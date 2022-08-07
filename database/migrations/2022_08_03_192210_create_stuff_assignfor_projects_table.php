<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('stuffassignforprojects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Projectid');
            $table->foreign('Projectid')->references('id')->on('project_management');
            $table->unsignedBigInteger('Stuffid');
            $table->foreign('Stuffid')->references('id')->on('stuff_management_models');;
            $table->string('WorkingCommission');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('stuff_assignfor_projects');
    }
};
