<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('drivers', function(Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');
            $table->string('last_name');
            
            $table->dateTime('birth_date');
            
            $table->string('gender');
            $table->string('marital_status');
            $table->string('credit_rating');
            $table->string('occupation');
            $table->string('education');
            $table->string('residence_status');
            
            $table->integer('current_residence_years');
            $table->integer('current_residence_months');
            $table->integer('age_first_licensed');
            
            $table->string('state_of_licensed');
            $table->string('license_no');
            
            $table->integer('vehicle_id')->unsigned();
            
//            $table->foreign('vehicle_id')->references('id')->on('vehicles');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('drivers');
    }

}
