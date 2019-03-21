<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->string('email',255)->unique();
            $table->string('account_name',255);
            $table->string('user_first_name',100)->nullable();
            $table->string('user_last_name',100)->nullable();
            $table->string('user_first_kana',100)->nullable();
            $table->string('user_last_kana',100)->nullable();
            $table->string('tel',30)->nullable();
            $table->string('password',60);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken(100);
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
        Schema::dropIfExists('school_accounts');
    }
}
