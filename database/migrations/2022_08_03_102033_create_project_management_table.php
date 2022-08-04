<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_management', function (Blueprint $table) {
            $table->id();
            $table->string('projectName');
            $table->string('projectDuration');
            $table->string('projectFeature');
            $table->string('projectAmount');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->string('projectDeliveryDate');
            $table->string('projectLogo');
            $table->string('projectStatus');
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
        Schema::dropIfExists('project_management');
    }
};
