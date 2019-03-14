<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalCorporationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_corporations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('legal_personality_code'); //法人区分code
            $table->string('legal_personality_name'); //法人区分name
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
        Schema::dropIfExists('educational_corporations');
    }
}
