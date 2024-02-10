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
        Schema::create('cirtificates', function (Blueprint $table) {
            $table->id();
            $table->string('degreeName');
            $table->string('institute');
            $table->string('passingYear');
            $table->string('studentID');
            $table->string('GPA');
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
        Schema::dropIfExists('cirtificates');
    }
};
