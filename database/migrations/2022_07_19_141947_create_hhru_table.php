<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHhruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hhru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_resume');
            $table->string('time_resume');
            $table->string('title_resume');
            $table->integer('wage_resume');
            $table->string('exp_resume');
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
        Schema::dropIfExists('hhru');
    }
}
