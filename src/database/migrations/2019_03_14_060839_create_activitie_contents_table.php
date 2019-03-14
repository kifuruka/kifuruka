<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitieContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitie_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activitie_id')->unsigned();
            $table->string('sub_title',100);
            $table->string('sub_contents',250);
            $table->string('sub_image',250)->nullable();
            $table->timestamps();

            $table->foreign('activitie_id')
            ->references('id')
            ->on('activities')
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
        Schema::dropIfExists('activitie_contents');
    }
}
