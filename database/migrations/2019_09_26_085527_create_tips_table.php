<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('time');
            $table->string('league');
            $table->string('team1');
            $table->string('team2');
            $table->bigInteger('prediction_id');
            $table->string('odd', 4, 2);
            
            $table->string('results')->default('_-_');
            $table->bigInteger('status_id')->default(1);
            $table->bigInteger('type_id')->default(1);

            
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
        Schema::dropIfExists('tips');
    }
}
