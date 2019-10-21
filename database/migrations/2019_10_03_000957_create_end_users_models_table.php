<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndUsersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('end_users_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('position');
            $table->integer('office_models_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('office_models_id')
              ->references('id')
              ->on('office_models')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('end_users_models');
    }
}
