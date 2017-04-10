<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_members', function (Blueprint $table) {
            $table->integer('corporate_field_id');
            $table->integer('id');
            $table->string('title',50);
            $table->string('img',100);
            $table->enum('state',['on','off']);
            $table->primary(['corporate_field_id', 'id']);
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
        Schema::dropIfExists('corporate_members');
    }
}
