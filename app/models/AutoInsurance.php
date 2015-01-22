<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class AutoInsurance extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'auto_insurances';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
        protected $hidden = array();        
        
        protected $fillable = array('first_name', 'last_name', 'address', 'city', 'state', 'zip_code', 'day_phone', 'evening_phone', 'email_address', 'multi_policy_discount', 'news_letter');
        
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
        public $first_name;
        
        /**
         *
         * @var String 
         */
        public $last_name;
        
        /**
         *
         * @var String 
         */
        public $address;
        
        /**
         *
         * @var String 
         */
        public $city;
        
        /**
         *
         * @var String 
         */
        public $state;
        
        /**
         * Area ZIP Code :: Format must be like these {ToDO: Formats of allowed zip codes}
         * 
         * @var String 
         */
        public $zip_code;
        
        /**
         *
         * @var String 
         */
        public $day_phone;
        
        /**
         *
         * @var String 
         */
        public $evening_phone;
        
        /**
         * Email Address Format : {username@provider.com}
         * 
         * @var String 
         */
        public $email;
        
        /**
         * This attribute is only available for HOME & AUTO Insurance
         * 
         * @var Boolean
         */
        public $multi_policy_discount;
        
        /**
         *
         * @var Boolean 
         */
        public $news_letter;               
        
        public function Vehicles(){
            return $this->hasMany('Vehicle');
        }
}
