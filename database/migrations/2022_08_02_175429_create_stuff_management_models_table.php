<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->integer('stuffTypeId');
            $table->string('stuffName');
            $table->unsignedBigInteger('stuffId');
            $table->foreign('stuffId')->references('id')->on('stuff_type_mng');
            $table->string('stuffContactNo');
            $table->string('stuffEmailId');
            $table->string('gardianContactNo');
            $table->string('referanceContactNo')->nullable();
            $table->string('stuffPresentAddress')->nullable();
            $table->string('stuffPermanentAddress');
            $table->string('nidImageUrl');
            $table->string('logInid')->nullable();
            $table->string('password')->nullable();
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
