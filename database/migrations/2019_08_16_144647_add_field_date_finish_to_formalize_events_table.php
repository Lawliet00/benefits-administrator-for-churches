<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldDateFinishToFormalizeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formalize_events', function (Blueprint $table) {
            $table->date('date_finish')->nullable()->comment('Fecha de finalización del evento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formalize_events', function (Blueprint $table) {
            $table->dropColumn('date_finish');
        });
    }
}
