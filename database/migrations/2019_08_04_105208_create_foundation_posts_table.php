<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundationPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foundation_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('foundation_id');
            $table->bigInteger('user_post_id');
            $table->integer('category_id');
            $table->text('f_post_detail');
            $table->string('f_post_image');
            $table->text('f_post_category');
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
        Schema::dropIfExists('foundation_posts');
    }
}
