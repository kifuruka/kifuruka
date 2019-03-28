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
            $table->string('school_name',100);
            $table->integer('activity_count')->nullable();
            $table->text('top_contents')->nullable();
            $table->string('sub_title1',255); 
            $table->text('sub_contents1');
            $table->string('sub_image1',255)->nullable();
            $table->string('sub_title2',255);
            $table->text('sub_contents2');
            $table->string('sub_image2',255)->nullable();
            $table->string('sub_title3',255);
            $table->text('sub_contents3');
            $table->string('sub_image3',255)->nullable();
            $table->string('tel',20)->nullable();
            $table->string('school_img')->nullable();
            $table->string('school_logo')->nullable();
            $table->text('url')->nullable();
            $table->string('postal_code',10)->nullable();
            $table->string('s_state',50)->nullable();
            $table->string('s_city',50)->nullable();
            $table->string('s_address1',100)->nullable();
            $table->string('s_address2',100)->nullable();
            $table->integer('school_type');
            $table->boolean('is_agreement')->default(0);
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
