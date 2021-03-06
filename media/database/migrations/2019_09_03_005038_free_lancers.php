<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FreeLancers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('tags');
            $table->text('works');
            $table->text('about');
            $table->text('content');
            $table->string('title');
            $table->string('img');
            $table->string('occupation');
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
        Schema::dropIfExists('lancers');
    }
}
