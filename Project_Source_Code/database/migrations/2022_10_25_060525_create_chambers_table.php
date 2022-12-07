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
        Schema::create('chambers', function (Blueprint $table) {
            $table->id();
            $table->string('AsmAreaExpert')->nullable();
            $table->string('AseName')->nullable();
            $table->string('DhcpName')->nullable();
            $table->string('Chamber_InstitutionName')->nullable();
            $table->string('Address1')->nullable();
            $table->string('Contact_Number')->nullable();
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
        Schema::dropIfExists('chambers');
    }
};
