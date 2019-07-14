<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_id',6);
            $table->boolean('1')->default(0);   
            $table->boolean('2')->default(0);   
            $table->boolean('3')->default(0);   
            $table->boolean('4')->default(0);   
            $table->boolean('5')->default(0);   
            $table->boolean('6')->default(0);   
            $table->boolean('7')->default(0);   
            $table->boolean('8')->default(0);   
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
        Schema::dropIfExists('assigns');
    }
}
