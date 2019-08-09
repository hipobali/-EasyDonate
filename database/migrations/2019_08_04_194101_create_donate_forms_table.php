<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("donor_name");
            $table->string("donor_ph_no");
            $table->string("donor_location");
            $table->string("donor_address");
            $table->string('donate_category');
            $table->string('donate_foundation');
            $table->string("donor_donationOption");
            $table->string("donor_date");
            $table->string("donor_amount");
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
        Schema::dropIfExists('donate_forms');
    }
}
