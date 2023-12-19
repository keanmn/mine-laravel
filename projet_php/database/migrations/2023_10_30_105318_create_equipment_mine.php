<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipment_mine', function (Blueprint $table) {
            $table->BigInteger('equipment_id');
            $table->BigInteger('mine_id');
            $table->dateTime('date_begin');
            $table->dateTime('date_end');
            $table->foreign('equipment_id')->on('equipments')->references('id');
            $table->foreign('mine_id')->on('mines')->references('id');
            $table->primary('id',['equipment_id','mine_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_mine');
    }
};
