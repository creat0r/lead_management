<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class BusinessInsurance extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'business_insurances';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
        protected $hidden = array();        
        
        protected $fillable = array();
        
        /**
         * Unique Identifier
         * 
         * @var Integer 
         */
        public $id;
               
        /**
         *
         * @var String
         */
        public $business_name;
        
        /**
         *
         * @var Integer
         */
        public $full_time_employees;
        
        /**
         *
         * @var Integer
         */
        public $part_time_employees;
        
        /**
         *
         * @var Boolean
         */
        public $will_replace_existing_policy;        
        
        /**
         *
         * @var Boolean
         */
        public $include_general_liability;
        
        /**
         *
         * @var Boolean
         */
        public $include_business_owner_policy;
        
        /**
         *
         * @var Boolean
         */
        public $include_commercial_auto;
        
        /**
         *
         * @var Boolean
         */
        public $include_workers_compensation;
        
        /**
         *
         * @var Boolean
         */
        public $include_group_health;
        
        /**
         *
         * @var Boolean
         */
        public $include_bonds;
        
        /**
         *
         * @var Boolean
         */
        public $include_dir_ofc_liability;
        
        /**
         *
         * @var Boolean
         */
        public $include_errors_omissions;
        
        
        /**
         *
         * @var String
         */
        public $laison_email;
        
        /**
         *
         * @var String
         */
        public $laison_first_name;
        
        /**
         *
         * @var String
         */
        public $laison_last_name;
        
        /**
         *
         * @var String
         */
        public $laison_contact;
        
        /**
         *
         * @var String
         */
        public $laison_contact_ext;
        
        /**
         *
         * @var String
         */
        public $business_street_address;
        
        /**
         *
         * @var String
         */
        public $business_street_suite;
        
        /**
         *
         * @var String
         */
        public $business_city;
        
        /**
         *
         * @var String
         */
        public $business_state;
        
        /**
         *
         * @var String
         */
        public $business_zip_code;
        
        /**
         *
         * @var String
         */
        public $business_sic_code;
        
        /**
         *
         * @var String
         */
        public $business_legal_status;
        
        /**
         *
         * @var Integer
         */
        public $no_years_in_business;
        
        /**
         *
         * @var Integer
         */
        public $gross_annual_payroll;
        
        /**
         *
         * @var Integer
         */
        public $gross_annual_revenue;
        
        /**
         *
         * @var Integer
         */
        public $owner_exp_in_industry;
        
        /**
         *
         * @var String
         */
        public $business_description;
        
        /**
         *
         * @var Integer
         */
        public $desired_liability_coverage;
        
        /**
         *
         * @var Timestamp
         */
        public $start_time_business_hours;
        
        /**
         *
         * @var Timestamp
         */
        public $end_time_business_hours;
        
        /**
         *
         * @var Boolean
         */
        public $non_owned_auto_coverage;
        
        /**
         *
         * @var Boolean
         */
        public $commercial_umbrella_coverage;
        
        /**
         *
         * @var Boolean
         */
        public $business_interruption_coverage;
        
        /**
         *
         * @var String
         */
        public $construction_type;
        
        /**
         *
         * @var Integer
         */
        public $construction_stories;
        
        /**
         *
         * @var Integer
         */
        public $total_square_footage;
        
        /**
         *
         * @var Integer
         */
        public $total_square_footage_occupied;
        
        /**
         *
         * @var String
         */
        public $burglar_alarm_type;
        
        /**
         *
         * @var String
         */
        public $file_alarm_type;
        
        /**
         *
         * @var Integer
         */
        public $desired_deductable_amount;
        
        /**
         *
         * @var Integer
         */
        public $physical_building_coverage_limit;
        
        /**
         *
         * @var Integer
         */
        public $business_personal_property_amount;
        
        /**
         *
         * @var Boolean
         */
        public $additional_properties_insurance;
        
        /**
         *
         * @var Boolean
         */
        public $discuss_non_owned_auto_coverage;
        
        /**
         *
         * @var Boolean
         */
        public $discuss_empl_liability_coverage;
        
        /**
         *
         * @var Integer
         */
        public $avg_hourly_wage;
        
        /**
         *
         * @var Boolean
         */
        public $exclude_officers_from_coverage;                
        
        /**
         *
         * @var Boolean
         */
        public $has_safety_program;
        
        /**
         *
         * @var String
         */
        public $current_insurance_company;
        
        /**
         *
         * @var Integer
         */
        public $current_annual_premium;
        
        /**
         *
         * @var Integer
         */
        public $claims_past_years;
        
        /**
         *
         * @var Integer
         */
        public $insured_years;
        
        /**
         *
         * @var DateTime
         */
        public $desired_effective_date;
}
