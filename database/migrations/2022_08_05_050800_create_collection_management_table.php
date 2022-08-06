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
        Schema::create('collection_management', function (Blueprint $table) {
            $table->id();
            $table->string('projectId');
            $table->string('customerId');
            $table->string('collectionAmount');
            $table->string('collectionDate');
            $table->string('collectionNote');
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
        Schema::dropIfExists('collection_management');
    }
};
