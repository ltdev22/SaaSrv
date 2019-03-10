<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gateway_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->json('information');
            $table->decimal('price', 6, 2);
            $table->boolean('active')->default(false);
            $table->boolean('teams_enabled')->default(false);
            $table->tinyInteger('teams_limit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
