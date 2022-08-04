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
        Schema::create('stuff_management_models', function (Blueprint $table) {
            $table->id();
            $table->string('stuffType');
            $table->string('stuffName');
            $table->string('stuffCode');
            $table->string('stuffContactNo');
            $table->string('stuffEmailId');
            $table->string('gardianContactNo');
            $table->string('referanceContactNo');
            $table->string('stuffPresentAddress');
            $table->string('stuffPermanentAddress');
            $table->string('nidImageUrl');
            $table->string('logInid');
            $table->string('password');
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
        Schema::dropIfExists('stuff_management_models');
    }
};
