<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pastor_names')->comment('Nombres del pastor principal de la congragación');
            $table->string('pastor_surnames')->comment('Nombre del pastor principal de la congragación');
            $table->integer('ci')->unique()->comment('Cedula de identidad');
            $table->string('pastors_address')->comment('Dirección del pastor principal');
            $table->string('phone')->comment('telefono del pastor principal');
            $table->string('email')->unique()->comment('correo electrónico');
            $table->string('church_name')->comment('Nombre de la Iglesia');
            $table->string('church_address')->comment('Dirección de la Iglesia');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->comment('Estado de la Iglesia');

            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade')->comment('Municipio de la Iglesia');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->comment('Ciudad de la Iglesia');

            $table->integer('parish_id')->unsigned();
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade')->comment('Parroquia de la Iglesia');

            $table->integer('denomination_id')->unsigned();
            $table->foreign('denomination_id')->references('id')->on('denominations')->onDelete('cascade')->comment('Parroquia de la Iglesia');

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
        Schema::dropIfExists('churches');
    }
}
