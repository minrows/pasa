<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curr_demands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('trade', 50);
            $table->integer('quantity');
            $table->string('country',50);
            $table->enum('state',['on','off']);
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
        Schema::dropIfExists('create_curr_demands');
    }
}
