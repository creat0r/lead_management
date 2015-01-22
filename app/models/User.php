<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'token', 'token_expiry_date');
    protected $fillable = array('email', 'full_name', 'password');

    /**
     * Unique Identifier For User
     * 
     * @var Integer 
     */
    public $id;

    /**
     * Email Address Format : username@provider.com
     * 
     * @var String
     */
    public $email;

    /**
     * Name will be truncated by '..' if it's length will exceed 20 characters
     * 
     * @var String
     */
    public $full_name;

    /**
     * A valid password should contains
     *  - An UpperCase Character
     *  - A Number
     *  - Should not be less than 8 characters
     * 
     * @var String 
     */
    public $password;

    /**
     *  MD5 Hash token generated to reset password
     * @var String 
     */
    public $token;

    /**
     * Age of expiry token. Usually Same Day.
     * 
     * @var \DateTime
     */
    public $token_expiry_date;

    /**
     * Possible Values ['Customer', 'System_Admin',  'Operator', 'Agent']
     * @var String 
     */
    public $user_type;

}
