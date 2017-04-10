<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrDemandImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curr_demand_imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_thumb',100);
            $table->string('img_full',100);
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
        Schema::dropIfExists('create_curr_demand_imgs');
    }
}
