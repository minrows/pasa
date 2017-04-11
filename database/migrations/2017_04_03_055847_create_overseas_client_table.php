<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverseasClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overseas_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',50);
            $table->string('country',50);
            $table->string('img',100);
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
        Schema::dropIfExists('overseas_clients');
    }
}
