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
        Schema::create('stuff_type_mng', function (Blueprint $table) {
            $table->id();
            $table->string('stuffType');
            $table->string('stuffTypeCode');
            $table->string('basicSalary');
            $table->string('workingCommission');
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
        Schema::dropIfExists('stuff_type_mngs');
    }
};
