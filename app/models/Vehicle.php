<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Vehicle extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'vehicles';

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
         * Model Year
         * @var String 
         */
        public $vehicle_year;
        
        /**
         * List Of Manufacturers to be asked
         * 
         * @var String 
         */
        public $vehicle_make;
        
        /**
         * Information Mapping of Model -> Manufacturer
         * 
         * @var String 
         */
        public $vehicle_model;
        
        /**
         *
         * @var String 
         */
        public $vehicle_zip_code;
        
        /**
         * Have you been previously insured for last 6 months
         * 
         * @var Boolean 
         */
        public $insured;
        
        /**
         * Name of the previous insurance firm
         * 
         * @var String 
         */
        public $prev_insurance_company_name;
        
        /**
         *
         * @var Integer 
         */
        public $time_with_prev_years;
        
        /**
         *
         * @var Integer 
         */
        public $time_with_prev_months;
        
        /**
         *
         * @var Integer 
         */
        public $insured_with_prev_years;
        
        /**
         *
         * @var Integer 
         */
        public $insured_with_prev_months;
        
        /**
         * Options must be asked for
         * 
         * @var String
         */
        public $vehicle_ownership;
        
        /**
         *
         * @var String 
         */
        public $primary_use;
        
        /**
         *
         * @var Integer 
         */
        public $daily_commute_miles;
        
        /**
         *
         * @var Integer
         */
        public $avg_days_per_week;
        
        /**
         *
         * @var Integer 
         */
        public $annual_milage_approx;
        
        /**
         *
         * @var String 
         */
        public $liability_coverage_model;
        
        /**
         *
         * @var Integer 
         */
        public $collision_deducatable;
        
        /**
         *
         * @var Integer 
         */
        public $comprehensive_deductable;
        
        public function auto_insurance(){
            return $this->belongsTo('AutoInsurance');
        }
        
        public function drivers(){
            return $this->hasMany('Driver');
        }
}
