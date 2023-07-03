<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleSubCatogotiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_sub_catogoties', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('restrict')->onUpdate('cascade');
            $table->string('grade', 100);
            $table->string('description', 300);
            $table->float('price', 15, 2);
            $table->string('engine', 200);
            $table->string('transmition', 200);
            $table->double('torque', 15, 2);
            $table->double('power', 15, 2);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_sub_catogoties');
    }
}
