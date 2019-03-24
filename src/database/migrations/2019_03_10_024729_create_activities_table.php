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
            $table->string('title',255)->nullable();
            $table->text('top_contents')->nullable();
            $table->integer('total_donation')->nullable();
            $table->integer('fans')->nullable();
            $table->string('activitie_img',255)->nullable();
            $table->text('url')->nullable();
            $table->timestamps();

            $table->foreign('school_id')
            ->references('id')
            ->on('schools')
            ->onDelete('cascade');

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
