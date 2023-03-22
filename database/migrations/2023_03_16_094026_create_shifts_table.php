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
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->timestamp('attendanced_at', $precision = 0)->useCurrent();
            $table->timestamp('leaved_at', $precision = 0)->useCurrent();
            $table->timestamp('work_start_at', $precision = 0)->useCurrent();
            $table->timestamp('work_fin_at', $precision = 0)->useCurrent();
            $table->integer('work_flag');
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
        Schema::dropIfExists('shifts');
    }
};
