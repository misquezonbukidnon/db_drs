<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevRegModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_reg_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('end_users_models_id')->unsigned()->index();
            $table->integer('office_models_id')->unsigned()->index();
            $table->integer('dev_type_models_id')->unsigned()->index();
            $table->string('device_model');
            $table->string('mac_address');
            $table->timestamps();


            $table->foreign('end_users_models_id')
              ->references('id')
              ->on('end_users_models')
              ->onDelete('cascade');

            $table->foreign('office_models_id')
              ->references('id')
              ->on('office_models')
              ->onDelete('cascade');

            $table->foreign('dev_type_models_id')
              ->references('id')
              ->on('dev_type_models')
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
        Schema::dropIfExists('dev_reg_models');
    }
}
