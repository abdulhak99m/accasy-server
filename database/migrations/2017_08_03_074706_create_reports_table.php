<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('sub_category');
            $table->string('coordinates');
            $table->string('comment')->nullable();
            $table->string('phone_number')->nullable();
            $table->binary('photo')->nullable();
            $table->bigInteger('report_timestamp');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
