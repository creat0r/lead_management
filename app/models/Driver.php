<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Driver extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'drivers';

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
     * First Name
     * @var String 
     */
    public $first_name;

    /**
     * Last Name
     * @var String 
     */
    public $last_name;

    /**
     * Birth Date
     * 
     * @var DateTime 
     */
    public $birth_date;

    /**
     * [Male | Female]
     * 
     * @var String 
     */
    public $gender;

    /**
     * [Single| Married | Divorced | Widowed]
     * 
     * @var String 
     */
    public $marital_status;

    /**
     * [Poor | Good | Excellent]
     * 
     * @var String 
     */
    public $credit_rating;

    /**
     *
     * @var String 
     */
    public $occupation;

    /**
     *
     * @var String 
     */
    public $education;

    /**
     *
     * @var String 
     */
    public $residence_status;

    /**
     *
     * @var Integer 
     */
    public $current_residence_years;

    /**
     *
     * @var Integer 
     */
    public $current_residence_months;

    /**
     *
     * @var Integer
     */
    public $age_first_licensed;

    /**
     *
     * @var String 
     */
    public $state_of_licensed;

    /**
     *
     * @var String 
     */
    public $license_no;

    /**
     *
     * @var Boolean 
     */
    public $is_student;

    /**
     *
     * @var Boolean 
     */
    public $has_revoked_license;

    /**
     *
     * @var Boolean 
     */
    public $has_filed_bankruptcy;

    /**
     *
     * @var Boolean 
     */
    public $require_sr22;

    /**
     *
     * @var Boolean 
     */
    public $has_tickets_claims;

    public function Vehicle() {
        return $this->belongsTo('Vehicle');
    }

}
