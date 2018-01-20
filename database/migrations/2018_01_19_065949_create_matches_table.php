<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competition_id')->unsigned();
            $table->integer('team_a_id')->unsigned();
            $table->integer('team_b_id')->unsigned();
            $table->integer('score_team_a');
            $table->integer('score_team_b');
            $table->foreign('competition_id')
                ->references('id')
                ->on('competitions');
            $table->foreign('team_a_id')
                ->references('id')
                ->on('teams');
            $table->foreign('team_b_id')
                ->references('id')
                ->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
