<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('educational_corporation_id')->unsigned();
            $table->string('school_name');
            $table->integer('activity_count');
            // $table->string('top_contents');
            // $table->string('tel',20)->nullable();
            $table->string('school_img')->nullable();
            // $table->string('url',250)->nullable();
            // $table->string('postal_code',10)->nullable();
            // $table->string('s_state',50)->nullable();
            // $table->string('s_city',50)->nullable();
            // $table->string('s_address1',100)->nullable();
            // $table->string('s_address2',100)->nullable();
            // $table->boolean('is_agreement')->default(0);
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
        Schema::dropIfExists('schools');
    }
}
