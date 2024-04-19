<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'lastname', 'firstname', 'mobile', 'whatsapp', 'experience', 'about', 'address', 'password', 'location', 'bankname', 'account_name', 'account_number', 'code', 'image', 'gender', 'password', 'email', 'slug', 'referral_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	
	public function ref()
{
    return $this->hasMany( User::class, 'referral_code', 'code' );
}	

	public function coderef()
{
    return $this->hasOne( User::class, 'code', 'referral_code' );
}


}
