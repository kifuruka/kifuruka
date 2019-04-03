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
            $table->string('activity_name',100);
            $table->string('title',255)->nullable();
            $table->text('top_contents')->nullable();
            $table->integer('total_donation')->nullable();
            $table->integer('fans')->nullable();
            $table->string('activity_img',255)->nullable();
            $table->text('url')->nullable();
            
            $table->string('sub_title1',255);
            $table->text('sub_contents1');
            $table->string('sub_image1',255)->nullable();
            $table->string('sub_title2',255);
            $table->text('sub_contents2');
            $table->string('sub_image2',255)->nullable();
            $table->string('sub_title3',255);
            $table->text('sub_contents3');
            $table->string('sub_image3',255)->nullable();

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
