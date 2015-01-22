<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vehicles', function(Blueprint $table) {
            $table->increments('id');

            $table->string('vehicle_year', 4);
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_zip_code');            

            $table->boolean('insured');

            $table->string('prev_insurance_company_name');

            $table->integer('time_with_prev_years');
            $table->integer('time_with_prev_months');
            $table->integer('insured_with_prev_years');
            $table->integer('insured_with_prev_months');

            $table->string('vehicle_ownership');
            $table->string('primary_use');

            $table->integer('daily_commute_miles');
            $table->integer('avg_days_per_week');
            $table->integer('annual_milge_approx');

            $table->string('liability_coverage_model');

            $table->integer('collision_deductable');
            $table->integer('comprehensive_deductable');
            
            $table->integer('auto_insurance_id')->unsigned();
            
//            $table->foreign('auto_insurance_id')->references('id')->on('auto_insurances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('vehicles');
    }

}
