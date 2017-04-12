<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->string('position',20);
            $table->string('tel_no',20);
            $table->string('mob_no',20);
            $table->text('address');
            $table->text('con_address');
            $table->string('email',50);
            $table->string('qualification',50);
            $table->date('dob');
            $table->enum('gender',['male','female']);
            $table->enum('marital_status',['single','married']);
            $table->string('spouse_name',50);
            $table->string('passport_no',10);
            $table->date('doi');
            $table->string('plae_of_issue',20);
            $table->date('doe');
            $table->integer('height_feet');
            $table->integer('height_inch');
            $table->integer('weight');
            $table->string('parent_name',50);
            $table->text('prior_exp');
            $table->text('document');
            $table->string('img',100);
            $table->date('applied_date');
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
        Schema::dropIfExists('online_forms');
    }
}
