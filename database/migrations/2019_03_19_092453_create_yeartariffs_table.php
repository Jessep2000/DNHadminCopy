<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYeartariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeartariffs', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('year');
            $table->integer('contributions');
            $table->integer('port_dues');
            $table->integer('energy_allowance');
            $table->integer('guest');
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
        Schema::dropIfExists('yeartariffs');
    }
}
