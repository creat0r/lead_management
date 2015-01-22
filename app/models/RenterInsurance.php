<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class HomeInsurance extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'renter_insurances';

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
    public $zip_code;

    /**
     *
     * @var String 
     */
    public $property_type;

    /**
     *
     * @var Integer 
     */
    public $built_year;

    /**
     *
     * @var Boolean
     */
    public $is_owner;

    /**
     *
     * @var Boolean 
     */
    public $is_rented;

    /**
     *
     * @var Boolean 
     */
    public $is_living;

    /**
     *
     * @var String
     */
    public $property_address;

    /**
     *
     * @var String 
     */
    public $property_apt_unit;

    /**
     *
     * @var String 
     */
    public $property_city;

    /**
     *
     * @var String 
     */
    public $property_state;

    /**
     *
     * @var String 
     */
    public $construction_type;

    /**
     *
     * @var String 
     */
    public $foundation;

    /**
     *  
     * @var String 
     */
    public $roof_type;

    /**
     *
     * @var String 
     */
    public $primary_heating_system_type;

    /**
     *
     * @var Integer 
     */
    public $no_of_bedrooms;

    /**
     *
     * @var Integer
     */
    public $no_of_bathrooms;

    /**
     *
     * @var Integer
     */
    public $no_of_stores;

    /**
     *
     * @var String 
     */
    public $garage_type;

    /**
     *
     * @var Integer 
     */
    public $square_footage_approx;

    /**
     *
     * @var String 
     */
    public $security_system_type;

    /**
     *
     * @var String 
     */
    public $fire_alarm_type;

    /**
     *
     * @var String 
     */
    public $muncipal_location_distance;

    /**
     *
     * @var Boolean 
     */
    public $has_dogs;

    /**
     *
     * @var Boolean 
     */
    public $is_on_food_plain;

    /**
     *
     * @var Boolean
     */
    public $has_dead_bolts;

    /**
     *
     * @var Boolean 
     */
    public $has_fire_extinguisher;

    /**
     *
     * @var Boolean 
     */
    public $has_trampoline;

    /**
     *
     * @var Boolean 
     */
    public $has_covered_deck_patio;

    /**
     *
     * @var Boolean 
     */
    public $has_swimming_pool;

    /**
     *
     * @var Integer 
     */
    public $no_of_rooms_dwelling;

    
    /**
     *
     * @var Integer 
     */
    public $replacement_value_posessions;
    
    /**
     *
     * @var Integer 
     */
    public $personal_liability_coverage;

    /**
     *
     * @var Integer 
     */
    public $desired_deductable;

    /**
     *
     * @var Boolean 
     */
    public $has_insurance_claims;

    /**
     *
     * @var Boolean 
     */
    public $replace_existing_insurance_policy;

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
     *
     * @var Boolean 
     */
    public $interested_in_morgage_protection_coverge;

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
    public $gender;

    /**
     *
     * @var DateTime 
     */
    public $birth_date;

    /**
     *
     * @var String 
     */
    public $best_contact_no;

    /**
     *
     * @var String
     */
    public $best_contact_no_ext;

    /**
     *
     * @var String
     */
    public $email;

    /**
     *
     * @var String 
     */
    public $credit_rating;

    /**
     *
     * @var Boolean 
     */
    public $contact_address_same_as_property;

    /**
     *
     * @var Boolean 
     */
    public $news_letter;

}
