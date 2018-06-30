<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_description', function (Blueprint $table) {
            $table->increments('service_id');
            $table->integer('type_id');
            $table->string('model',255);
            $table->string('serial',255);
            $table->text('comment');
            $table->string('equipment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_description');
    }
}
