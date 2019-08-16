<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormalizeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formalize_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('space_available');
            $table->enum('state', [1, 2, 3, 4])
                    ->comment(" 1 =>'iniciado', 2=>'esperando para viajar', 3=>'en proceso', 4=>'finalizado' ");
            // $table->integer('report_id')->unsigned();
            // $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade')->comment('Informe del evento');
            $table->softDeletes()->comment('Fecha y hora en la que el registro fue eliminado');
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
        Schema::dropIfExists('formalize_events');
    }
}
