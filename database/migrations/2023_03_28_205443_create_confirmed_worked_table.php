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
        Schema::create('confirmed_worked', function (Blueprint $table) {
            $table->foreignId('confirmed_id')->constrained('confirmed_shifts');
            $table->foreignId('worked_id')->constrained('worked_shifts');
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['confirmed_id','worked_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmed_worked');
    }
};
