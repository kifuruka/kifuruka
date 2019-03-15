<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activitie_id')->unsigned();
            $table->string('title',100);
            $table->string('contents',250);
            $table->integer('price');
            $table->string('donation_img',250)->nullable();
            $table->timestamp('period_at');
            $table->timestamps();

            $table->foreign('activitie_id')
            ->references('id')
            ->on('activities');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
