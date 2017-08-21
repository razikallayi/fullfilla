<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('company_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('landline');
            $table->string('mobile');
            $table->string('fax')->nullable();
            $table->string('email');
            $table->text('website')->nullable();
            $table->text('description')->nullable();
            $table->integer('category_id')->unsigned();
            $table->boolean('is_24_hour')->default(false);
            $table->text('working_times')->nullable();
            $table->string('location')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->text('address')->nullable();
            $table->text('tags')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('map_embedded_code')->nullable();
            $table->text('services')->nullable();
            $table->text('intro_video')->nullable();
            $table->boolean('is_verified')->default(false)->unsigned();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
