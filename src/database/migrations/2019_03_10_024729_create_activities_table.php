<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');    
            $table->integer('school_id')->unsigned();
            $table->string('activitie_name',100);
            $table->string('title',100);
            $table->string('top_contents',250);
            $table->integer('total_donation');
            $table->integer('fans');
            $table->string('activitie_img',250)->nullable();
            $table->string('url',250)->nullable();
            $table->timestamp('period_at');
            $table->timestamps();

            $table->foreign('school_id')
            ->references('id')
            ->on('schools');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
