<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessInsuranceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('business_insurances', function(Blueprint $table) {

            $table->increments('id');

            $table->string('business_name');

            $table->integer('full_time_employees');
            $table->integer('part_time_employees');

            $table->boolean('will_replace_existing_policy');
            $table->boolean('include_general_liability');
            $table->boolean('include_business_owner_policy');
            $table->boolean('include_commercial_auto');
            $table->boolean('include_workers_compensation');
            $table->boolean('include_group_health');
            $table->boolean('include_bonds');
            $table->boolean('include_dir_ofc_liability');
            $table->boolean('include_errors_omissions');
            $table->string('laison_email');
            $table->string('laison_first_name');
            $table->string('laison_last_name');
            $table->string('laison_contact');
            $table->string('laison_contact_ext');
            $table->string('business_street_address');
            $table->string('business_street_suite');
            $table->string('business_city');
            $table->string('business_state');
            $table->string('business_zip_code');
            $table->string('business_sic_code');
            $table->string('business_legal_status');
            $table->integer('no_years_in_business');
            $table->integer('gross_annual_payroll');
            $table->integer('gross_annual_revenue');
            $table->integer('owner_exp_in_industry');
            $table->string('business_description');
            $table->integer('desired_liability_coverage');
            $table->timestamp('start_time_business_hours');
            $table->timestamp('end_time_business_hours');

            $table->boolean('non_owned_auto_coverage');
            $table->boolean('commercial_umbrella_coverage');
            $table->boolean('business_interruption_coverage');

            $table->string('construction_type');
            $table->integer('construction_stories');
            $table->integer('total_square_footage');
            $table->integer('total_square_footage_occupied');
            $table->string('burglar_alarm_type');
            $table->string('file_alarm_type');
            $table->integer('desired_deductable_amount');
            $table->integer('physical_building_coverage_limit');
            $table->integer('business_personal_property_amount');
            $table->boolean('additional_properties_insurance');
            $table->boolean('discuss_non_owned_auto_coverage');
            $table->boolean('discuss_empl_liability_coverage');

            $table->integer('avg_hourly_wage');
            $table->boolean('exclude_officers_from_coverage');
            $table->boolean('has_safety_program');

            $table->string('current_insurance_company');
            $table->integer('current_annual_premium');
            $table->integer('claims_past_years');
            $table->integer('insured_years');
            $table->dateTime('desired_effective_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('business_insurances');
    }

}
