<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenterInsuranceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('renter_insurances', function(Blueprint $table) {
            $table->increments('id');

            $table->string('zip_code');
            $table->string('property_type');

            $table->integer('built_year');

            $table->boolean('is_owner');
            $table->boolean('is_rented');
            $table->boolean('is_living');

            $table->string('property_address');
            $table->string('property_apt_unit');
            $table->string('property_city');
            $table->string('property_state');
            $table->string('construction_type');
            $table->string('foundation');
            $table->string('roof_type');
            $table->string('primary_heating_system_type');

            $table->integer('no_of_bedrooms');
            $table->integer('no_of_bathrooms');
            $table->integer('no_of_stores');

            $table->string('garage_type');

            $table->integer('square_foot_approx');

            $table->string('security_system_type');
            $table->string('fire_alarm_type');
            $table->string('muncipal_location_distance');

            $table->boolean('has_dogs');
            $table->boolean('is_on_food_plain');
            $table->boolean('has_dead_bolts');
            $table->boolean('has_fire_extinguisher');
            $table->boolean('has_trampoline');
            $table->boolean('has_covered_desk_patio');
            $table->boolean('has_swimming_pool');

            $table->integer('no_of_rooms_dwelling');
            $table->integer('replacement_value_posessions');
            $table->integer('perosnal_liability_coverage');
            $table->integer('desired_deductable');

            $table->boolean('has_insurance_claims');
            $table->boolean('replace_existing_insurance_policy');

            $table->string('prev_insurance_company_name');

            $table->integer('time_with_prev_years');
            $table->integer('time_with_prev_months');
            $table->integer('insured_with_prev_years');
            $table->integer('insured_with_prev_months');

            $table->boolean('interested_in_morgage_protection_coverage');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');

            $table->dateTime('birth_date');

            $table->string('best_contact_no');
            $table->string('best_contact_no_ext');
            $table->string('email');
            $table->string('credit_rating');

            $table->boolean('contact_address_same_as_property');
            $table->boolean('news_letter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('renter_insurances');
    }

}
