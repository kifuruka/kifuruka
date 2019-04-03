<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('user_first_name',100)->nullable();
            $table->string('user_last_name',100)->nullable();
            $table->string('user_first_kana',100)->nullable();
            $table->string('user_last_kana',100)->nullable();
            $table->string('tel',20)->nullable();
            $table->string('sex',10)->nullable();
            $table->string('birthday',10)->nullable();
            $table->string('user_img',255)->nullable();
            $table->string('postal_code',10)->nullable();
            $table->string('u_state',50)->nullable();
            $table->string('u_city',50)->nullable();
            $table->string('u_address1',100)->nullable();
            $table->string('u_address2',100)->nullable();
            $table->boolean('is_info')->default(1);
            $table->boolean('is_donation')->default(0);
            $table->timestamps();
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('user_details');
    }
}
