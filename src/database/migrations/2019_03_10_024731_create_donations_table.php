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
            $table->integer('activity_id')->unsigned();
            $table->string('title',100);
            $table->text('contents')->nullable();
            $table->integer('price')->nullable();
            $table->string('donation_img',255)->nullable();
            $table->timestamp('period_at')->nullable();
            $table->timestamps();
            $table->boolean('is_published')->default(0);

            $table->foreign('activity_id')
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
        Schema::dropIfExists('donations');
    }
}
