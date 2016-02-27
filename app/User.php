<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{

    const USER_STATUS_NOT_VERIFIED = 1;
    const USER_STATUS_VERIFIED = 2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'birthday', 'email', 'password', 'facebook_id', 'avatar', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
