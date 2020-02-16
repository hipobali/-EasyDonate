<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foundations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_foundation')->default(false);
            $table->string('foundation_profile');
            $table->string('foundation_name');
            $table->string('year_picker');
            $table->string('month_picker');
            $table->string('day_picker');
            $table->text('address');
            $table->bigInteger('phone');
            $table->string('president_name');
            $table->string('foundation_certificate');
            $table->string('member_count');
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
        Schema::dropIfExists('foundation');
    }
}
