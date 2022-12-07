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
        Schema::create('a_s_e_s', function (Blueprint $table) {
            $table->id();
            $table->string('ASM_Expert');
            $table->string('ASE_Name');
            $table->string('ASE_Area');
            $table->string('Territory');
            $table->string('OutletCode');
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
        Schema::dropIfExists('a_s_e_s');
    }
};
