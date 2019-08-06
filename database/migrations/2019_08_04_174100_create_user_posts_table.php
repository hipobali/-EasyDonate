<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('people_id');
            $table->bigInteger('user_id');
            $table->string('title');
            $table->string('location');
            $table->string('name');
            $table->string('items_requested');
            $table->string('cost');
            $table->string('significance');
            $table->string('phone');
            $table->string('image');
            $table->string('remark');
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
        Schema::dropIfExists('user_posts');
    }
}
