<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Tabla pivot entre eventos e Iglesias
 */
class CreateEventChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_churches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('id')->on('formalize_events')->onDelete('cascade')->comment('Id del evento');

            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade')->comment('Id de la Iglesia');
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
        Schema::dropIfExists('event_churches');
    }
}
