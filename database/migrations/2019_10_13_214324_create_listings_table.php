<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->string('images');
            $table->text('description');
            $table->text('services');
            $table->string('phone');
            $table->string('website');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->boolean('agree_terms')->default(0);
            $table->boolean('is_verified')->default(0);
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('listings');
    }
}
