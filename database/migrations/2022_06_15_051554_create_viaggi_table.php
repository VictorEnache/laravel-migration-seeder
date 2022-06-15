<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggi', function (Blueprint $table) {
            $table->id();

            $table->string('Destinazione', 50);
            $table->decimal('prezzo', 8, 2)->unsigned();
            $table->smallInteger('giorni');
            $table->string('data_partenza', 50);
            $table->string('data_ritorno', 50);
            $table->text('attivita');
            $table->string('image');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaggi');
    }
}
