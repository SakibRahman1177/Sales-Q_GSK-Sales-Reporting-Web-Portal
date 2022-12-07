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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('Area');
            $table->string('Territory');
            $table->string('DBCode');
            $table->string('DBName');
            $table->string('OutletCode');
            $table->string('SKUName');
            $table->string('Pcs');
            $table->string('Value');
            $table->string('OutletName');
            $table->string('DHCPName');
            $table->string('Address');
            $table->string('ContactNumber');
            $table->string('Brand');
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
        Schema::dropIfExists('posts');
    }
};
