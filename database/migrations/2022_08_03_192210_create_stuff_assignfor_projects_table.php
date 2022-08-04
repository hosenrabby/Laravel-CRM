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
            $table->string('Projectid');
            $table->string('Stuffid');
            $table->string('WorkingCommission');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('stuff_assignfor_projects');
    }
};
